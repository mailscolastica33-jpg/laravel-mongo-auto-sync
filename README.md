# Laravel MongoDB Relationships
[![Latest Stable Version](https://poser.pugx.org/offline-agency/laravel-mongo-auto-sync/v/stable)](https://packagist.org/packages/offline-agency/laravel-mongo-auto-sync)
[![Total Downloads](https://img.shields.io/packagist/dt/offline-agency/laravel-mongo-auto-sync.svg?style=flat-square)](https://packagist.org/packages/offline-agency/laravel-mongo-auto-sync)
[![Build Status](https://github.com/offline-agency/laravel-mongo-auto-sync/actions/workflows/build-ci.yml/badge.svg)](https://github.com/offline-agency/laravel-mongo-auto-sync/actions/workflows/build-ci.yml)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/offline-agency/laravel-mongo-auto-sync.svg?style=flat-square)](https://scrutinizer-ci.com/g/offline-agency/laravel-mongo-auto-sync)
[![StyleCI](https://github.styleci.io/repos/167277388/shield)](https://styleci.io/repos/167277388)
[![codecov](https://codecov.io/gh/offline-agency/laravel-mongo-auto-sync/branch/master/graph/badge.svg?token=0BHADJQYAW)](https://codecov.io/gh/offline-agency/laravel-mongo-auto-sync)

This package provides a better support for [MongoDB](https://www.mongodb.com) relationships in [Laravel](https://laravel.com/) Projects.
At low level all CRUD operations has been handled by [jenssegers/laravel-mongodb](https://github.com/jenssegers/laravel-mongodb)

## About this Fork
This fork implements various fixes that makes the package work with at least PHP 8.5 and Mongodb 7.  
  
This update migrates the package from the deprecated `jenssegers/mongodb` driver to the official `mongodb/laravel-mongodb` package.  
The migration required fixing breaking changes in service providers, namespace renames, BSON serialization behavior, and Eloquent embedded document hydration.  

## Changelog

### Migration Changelog: `jenssegers/mongodb` → `mongodb/laravel-mongodb`

### `tests/TestCase.php`
- Removed `MongodbQueueServiceProvider` from providers and imports — the class no longer exists in the new package
- Fixed typo: `MongodbServiceProvider` → `MongoDBServiceProvider`
- Changed `queue.default` from `database` to `sync` to avoid requiring a MongoDB queue driver in tests

---

### `src/Http/Models/MDModel.php`
- Added `getAttribute()` override to automatically hydrate embedded fields (`EmbedsOne` / `EmbedsMany`) from raw arrays into mini model objects
- Handles unwrapping of scalar values stored as `[0 => "value"]` back to plain scalar values

---

### `src/Http/Models/DefaultMini.php`
- Added `getAttribute()` to unwrap scalar values `[0 => "val"]` → `"val"` on all mini models, caused by the new driver's BSON deserialization behavior
- Added `getRefIdAttribute()` to always normalize `ref_id` as a string, handling `MongoDB\BSON\ObjectId`, arrays with `$oid`, and numeric arrays

---

### `src/Traits/ModelAdditionalMethod.php`
- Renamed `isArray()` → `isArrayCustom()` to avoid conflict with PHPUnit's `final` method `Assert::isArray()`
- Updated `isArrayCustom()` to delegate to `assertIsArrayCustom()` from `Helper`, ensuring internal value types are also validated
- Updated `castValueToBeSaved()`: replaced `$this->isArray()` with `is_array()` and added `is_object()` guard before calling `getAttributes()` to prevent `Call to getAttributes() on string` errors
- Updated `getDbValue()`: added unwrap of `[0 => "val"]` → `"val"` for scalar values read from the database, preventing wrapped values from being re-saved into embedded documents

---

### `src/Traits/MainMongoTrait.php`
- Updated `setRequest()`: replaced direct `(array)` cast with `json_decode(json_encode($value), true)` when converting `stdClass` objects, preventing null bytes in BSON keys caused by PHP's behavior when casting objects with private/protected properties to arrays

---

### `src/Traits/RelationshipMongoTrait.php`
- Added `hydrateEmbedded()` helper method to hydrate raw arrays into mini model objects
- Updated loop in `updateRelationWithSync()` to hydrate `$temp` when it is an array before accessing `->attributes`
- Updated `deleteTargetObj()`: added string cast for `ref_id`, handling both `MongoDB\BSON\ObjectId` and array formats

---

### `src/Traits/ModelAdditionalMethod.php` — `getObjWithRefId()`
- Added `is_array($value)` check in the `EmbedsMany` loop with cast to `(object)` before accessing `->ref_id`

---

### `tests/MongoSyncTraitTest.php`
- Lines 80 and 159: changed `assertIsObject($navigation->target)` → `assertEmpty($navigation->target)` — `target` is a plain field and an empty `stdClass` is correctly stored and returned as an empty array

---

### `tests/Feature/ExampleTest.php`
- Deleted — this was the default Pest placeholder test, not relevant for a package

---

### `phpunit.xml`
- Run `./vendor/bin/pest --migrate-configuration` to update the deprecated XML schema (shown as a warning at test startup)

### [See Logs](log.txt)

## Installation

```bash
composer require offline-agency/laravel-mongo-auto-sync
```

### Prerequisites
Make sure you have the MongoDB PHP driver installed. You can find installation instructions at [http://php.net/manual/en/mongodb.installation.php](http://php.net/manual/en/mongodb.installation.php)

### Package version Compatibility

| This package | Laravel | Laravel MongoDB |
|--------------|---------|-----------------|
| 1.x          | 5.8.x   | 3.5.x           |
| 1.x          | 6.x     | 3.6.x           |
| 2.x          | 5.8.x   | 3.5.x           |
| 2.x          | 6.x     | 3.6.x           |
| 2.x          | 7.x     | 3.7.x           |
| 2.x          | 8.x     | 3.8.x           |
| 2.x          | 9.x     | 3.9.x           |
| 3.x          | 5.8.x   | 3.5.x           |
| 3.x          | 6.x     | 3.6.x           |
| 3.x          | 7.x     | 3.7.x           |
| 3.x          | 8.x     | 3.8.x           |
| 3.x          | 9.x     | 3.9.x           |

### PHP Version Compatibility
- Version 1: PHP 7.1, 7.2, 7.3
- Version 2: PHP 7.4
- Version 3: PHP 7.4-8.1

## Features
- Sync changes between collection with relationships after CRUD operations
    - EmbedsOne & EmbedsMany 
    
#### Example without our package
  
  ``` php
  //create a new Article with title "Game of Thrones" with Category "TV Series"
  //assign data to $article       
  $article->save();
  /*
  Article::class {
    'title' => 'Game of Thrones',
    'category' => Category::class {
        'name' => 'TV Series'
     }
  }
  */
  
  //Retrieve 'TV Series' category
  $category = Category::where('name', 'TV Series')->first();
  /*
    Category::class {
        'name' => 'Game of Thrones',
        'articles' => null
    }
  */ 
  ```
  
The sub document article has not been updated with the new article. So you will need some extra code to write in order to see the new article it in the category page. The number of sync depends on the number of the relationships and on the number of the entry in every single EmbedsMany relationships.
  
Total updates = ∑ (entry in all EmbedsMany relationships) + ∑ (EmbedsOne relationships)
  
As you can see the lines of extra code can rapidly increase, and you will write many redundant code.
 
#### Example with our package
  
  ``` php
  //create a new Article with title "Game of Thrones" with Category "TV Series"
  $article->storeWithSync($request);
  /*
  Article::class {
    'title' => 'Game of Thrones',
    'category' => Category::class {
        'name' => 'TV Series'
    }
  }
   */
  //Retrieve 'TV Series' category
  $category = Category::where('name', 'TV Series')->first();   
 /*
  Category::class {
    'name' => 'Game of Thrones',
    'articles' => Article::class {
        'title' => 'Game of Thrones'
    }
  }
  */ 
  ```
The sub document article has been updated with the new article, with no need of extra code :tada: 

You can see the new article on the category page because the package synchronizes the information for you by reading the Model Setup.
  
**These example can be applied for all write operations on the database.**
- Referenced sub documents [TO DO] 
- Handle sub document as Model in order to exploit Laravel ORM support during write operation (without sync feature) [TO BE TEST] 
- Handle referenced sub document as Model in order to exploit Laravel ORM support during write operation (without sync feature) [TO DO] 
- Advance cast field support

## Use cases
- Blog: see demo [here](https://github.com/offline-agency/laravel-mongodb-blog)
- Ecommerce
- API System for mobile application o for generated static site
- Any projects that require fast read operations and (slow) write operations that can be run on background

## Documentation
You can find the documentation [here](https://docs.offlineagency.com/laravel-mongo-auto-sync/)

## Testing

Run this command inside your project's route
``` bash
docker-compose up
```

Now run the tests with:
``` bash
composer test
```

## Roadmap :rocket:
- Refactor target synchronization to Observer pattern, so all this operation can be run on background using [Laravel Queue System](https://laravel.com/docs/5.8/queues). This will also speed up all the operations in the collection that is primary involved in write operations.
- Command Analyse Database: This command will analyse the database in order to find some relationship error. 
Ex: An article with a category associated that is not present on the Category's sub document.
- Refactor **save()** method in order to handle CRUD operation on relationship also without sync.
- Support for [referenced relationships](https://docs.mongodb.com/manual/tutorial/model-referenced-one-to-many-relationships-between-documents/).
- Better support for all field types.
- DestroyWithSync() without delete sub documents on other collections.
- Add more tests.
- Nested relationships.
- Benchmark MongoDB vs Mysql (write and read operation).
- Fix typo errors.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security-related issues, please email support@offlineagency.com instead of using the issue tracker.



## Credits
- [Giacomo Fabbian](https://github.com/Giacomo92)

- [All Contributors](https://github.com/offline-agency/laravel-mongo-auto-sync/graphs/contributors)

## About us
Offline Agency is a web design agency based in Padua, Italy. You'll find an overview of our projects [on our website](https://offlineagency.it/#home).

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
