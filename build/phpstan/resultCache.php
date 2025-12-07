<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1765147586,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.33',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80415,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, level: 8, paths: [/Users/gfabbian/projects/laravel-mongo-auto-sync/src], tmpDir: /Users/gfabbian/projects/laravel-mongo-auto-sync/build/phpstan, treatPhpDocTypesAsCertain: false}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/gfabbian/projects/laravel-mongo-auto-sync/composer.lock' => 'd88d3c5bc24202cfee9446ebb37bde64d1af1d14',
  ),
  'composerInstalled' => 
  array (
    '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.8.4',
          'version' => '7.8.4.0',
          'reference' => '130a9bf0e269ee5f5b320108f794ad03e275cad4',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.1',
          'version' => '0.14.1.0',
          'reference' => 'f05858549e5f9d7bb45875a75583240a38a281d0',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.5',
          'version' => '1.1.5.0',
          'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'jenssegers/mongodb' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '5.5.0',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.8.0',
          'version' => '3.8.0.0',
          'reference' => 'd13ef96d652d1b2a8f34f1760ba6bf5b9c98112e',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v11.47.0',
          'version' => '11.47.0.0',
          'reference' => '86693ffa1ba32f56f8c44e31416c6665095a62c5',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.4',
          'version' => '1.2.4.0',
          'reference' => '49f92285ff5d6fc09816e976a004f8dec6a0ea30',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'reference' => '69dcca060ecb15e4b564af63d1f642c81a241d6f',
          'type' => 'project',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.8',
          'version' => '0.3.8.0',
          'reference' => '096748cdfb81988f60090bbb839ce3205ace0d35',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'cb291e4c998ac50637c7eeb58189c14f5de5b9dd',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.2',
          'version' => '2.10.2.0',
          'reference' => '3bcb5f62d6f837e0f093a601e26badafb127bd4c',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'f625804987a0a9112d954f9209d91fec52182344',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'ccbfb51c0445298e7e0b7f4481b942f589665368',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'mongodb/builder' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'mongodb/laravel-mongodb' => 
        array (
          'pretty_version' => '5.5.0',
          'version' => '5.5.0.0',
          'reference' => 'c483b99a69ea9916d17719b86e7e5ea2f8b44c8a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../mongodb/laravel-mongodb',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mongodb/mongodb' => 
        array (
          'pretty_version' => '2.1.2',
          'version' => '2.1.2.0',
          'reference' => '0a2472ba9cbb932f7e43a8770aedb2fc30612a67',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../mongodb/mongodb',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.0',
          'version' => '3.11.0.0',
          'reference' => 'bdb375400dcd162624531666db4799b36b64e4a1',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'fa1f0b8261ed150447979eb22e373b7b7ad5a8e0',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.3',
          'version' => '8.8.3.0',
          'reference' => '1dc9e88d105699d0fee8bb18890f41b274f6b4c4',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v9.2.2',
          'version' => '9.2.2.0',
          'reference' => '002d948834c0899e511f5ac0381669363d7881e5',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v9.1.1',
          'version' => '9.1.1.0',
          'reference' => 'a8ebfa6c2e50f8c6597c489b4dfaf9af6789f62a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.18',
          'version' => '1.2.18.0',
          'reference' => '0e080ef62eed6c45aaea3619566a1fce02b62094',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v9.15.0',
          'version' => '9.15.0.0',
          'reference' => 'd0181240f93688448d4ae3b5479ec5ed70a87a47',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v9.17.0',
          'version' => '9.17.0.0',
          'reference' => 'a5b4d56a40536fde50a72e20ce43abaa76f8de2f',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v9.13.5',
          'version' => '9.13.5.0',
          'reference' => '1da2ea95089ed3516bda6f8e9cd57c81290004bf',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v3.8.4',
          'version' => '3.8.4.0',
          'reference' => '72cf695554420e21858cda831d5db193db102574',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v3.0.0',
          'version' => '3.0.0.0',
          'reference' => 'e79b26c65bc11c41093b10150c1341cc5cdbea83',
          'type' => 'composer-plugin',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v3.1.1',
          'version' => '3.1.1.0',
          'reference' => 'db7bd9cb1612b223e16618d85475c6f63b9c8daa',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v3.2.0',
          'version' => '3.2.0.0',
          'reference' => '6801be82fd92b96e82dd72e563e5674b1ce365fc',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v3.0.5',
          'version' => '3.0.5.0',
          'reference' => 'e10dbdc98c9e2f3890095b4fe2144f63a5717e08',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.5',
          'version' => '5.6.5.0',
          'reference' => '90614c73d3800e187615e2dd236ad0e2a01bf761',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '92a98ada2b93d9b201a613cb5a33584dde25f195',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.33',
          'version' => '2.1.33.0',
          'reference' => '9e800e6bee7d5bd02784d4c6069b48032d16224f',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.11',
          'version' => '11.0.11.0',
          'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.33',
          'version' => '11.5.33.0',
          'reference' => '5965e9ff57546cb9137c0ff6aa78cb7442b05cf6',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.16',
          'version' => '0.12.16.0',
          'reference' => 'ee6d5028be4774f56c6c2c85ec4e6bc9acfe6b67',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.1',
          'version' => '4.9.1.0',
          'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.1',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '6d9f0fbf2ec2e9785880096e3abd0ca0c88b506e',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'ab862f478513e7ca2fe9ec117a6f01a8da6e1135',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '48be2b0653594eea32dcef130cca1c811dcf25c2',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '573f95783a2ec6e38752979db139f09fec033f03',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '340b9ed7320570f319028a2cbec46d40535e94bd',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => 'bd1af1e425811d6f077db240c3a588bdb405cd27',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '171d2ec4002012a023e042c6041d7fde58b143c6',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'a3d9eea8cfa467ece41f0f54ba28185d74bd53fd',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bdb02729471be5d047a3ac4a69068748f1a6be7a',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '7ca8dc2d0dcf4882658313aba8be5d9fd01026c8',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '4720254cb2644a0b876233d258a32bf017330db7',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => 'ba65a969ac918ce0cc3edfac6cdde847eba231dc',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => '770e3b8b0ba8360958abedcabacd4203467333ca',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2498e9f81b7baa206f44de583f2f48350b90142c',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '41fd6c4ae28c38b294b42af6db61446594a0dece',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.5',
          'version' => '0.8.5.0',
          'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.12.1',
          'version' => '1.12.1.0',
          'reference' => '9be6926d8b485f55b9229203f962b51ed377ba68',
          'type' => 'library',
          'install_path' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar:///Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/gfabbian/projects/laravel-mongo-auto-sync/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $string of function strtolower expects string, array|bool|string|null given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 62,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 62,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\DropCollection::getModelPathByName() has parameter $collection_name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 74,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 74,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\DropCollection::checkOaModels() has parameter $collection_name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\DropCollection::checkOaModels() has parameter $path with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\DropCollection::getModel() should return OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel but returns object.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 125,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 125,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "." between \'Error \' and array|bool|string|null results in an error.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'line' => 127,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 127,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation::getModelPathByName() has parameter $collection_name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation::checkOaModels() has parameter $collection_name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation::checkOaModels() has parameter $path with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation::getModel() should return OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel but returns object.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 134,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Binary operation "." between \'Error \' and array|bool|string|null results in an error.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'line' => 136,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 136,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
       'identifier' => 'binaryOp.invalid',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class OfflineAgency\\MongoAutoSync\\Eloquent\\Builder extends generic class MongoDB\\Laravel\\Eloquent\\Builder but does not specify its types: TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 8,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 8,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::update() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::insert() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 29,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::insert() has parameter $values with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 29,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::insertGetId() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::insertGetId() has parameter $sequence with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::insertGetId() has parameter $values with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 45,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $attribute of method Illuminate\\Database\\Eloquent\\Model::syncOriginalAttribute() expects string, Illuminate\\Contracts\\Database\\Query\\Expression|string given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Possibly invalid array key type Illuminate\\Contracts\\Database\\Query\\Expression|string.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PhpParser\\Node\\ArrayItem',
       'identifier' => 'array.invalidKey',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::increment() should return int but returns bool.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 93,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 93,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $attribute of method Illuminate\\Database\\Eloquent\\Model::syncOriginalAttribute() expects string, Illuminate\\Contracts\\Database\\Query\\Expression|string given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 114,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::decrement() should return int but returns bool.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Possibly invalid array key type Illuminate\\Contracts\\Database\\Query\\Expression|string.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PhpParser\\Node\\ArrayItem',
       'identifier' => 'array.invalidKey',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::raw() return type with generic class Illuminate\\Database\\Eloquent\\Collection does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 133,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 133,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class OfflineAgency\\MongoAutoSync\\Eloquent\\Cursor not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 139,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 139,
       'nodeType' => 'PhpParser\\Node\\Expr\\Instanceof_',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $iterator of function iterator_to_array expects iterable, Illuminate\\Contracts\\Database\\Query\\Expression&OfflineAgency\\MongoAutoSync\\Eloquent\\Cursor given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 140,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 140,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class OfflineAgency\\MongoAutoSync\\Eloquent\\BSONDocument not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 144,
       'nodeType' => 'PhpParser\\Node\\Expr\\Instanceof_',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method getArrayCopy() on an unknown class OfflineAgency\\MongoAutoSync\\Eloquent\\BSONDocument.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 145,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::raw() should return Illuminate\\Database\\Eloquent\\Collection|MongoDB\\Builder\\Expression|T but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 147,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Type #3 from the union: Type Illuminate\\Database\\Eloquent\\Model is not always the same as T. It breaks the contract for some argument types, typically subtypes.',
       'nodeLine' => 147,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::raw() should return Illuminate\\Database\\Eloquent\\Collection|MongoDB\\Builder\\Expression|T but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 150,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Type #3 from the union: Type Illuminate\\Database\\Eloquent\\Model is not always the same as T. It breaks the contract for some argument types, typically subtypes.',
       'nodeLine' => 150,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::raw() should return Illuminate\\Database\\Eloquent\\Collection|MongoDB\\Builder\\Expression|T but returns Illuminate\\Contracts\\Database\\Query\\Expression.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 153,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'Type #3 from the union: Type Illuminate\\Contracts\\Database\\Query\\Expression is not always the same as T. It breaks the contract for some argument types, typically subtypes.',
       'nodeLine' => 153,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    27 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::addUpdatedAtColumn() has parameter $values with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 164,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 164,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    28 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Eloquent\\Builder::addUpdatedAtColumn() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'line' => 164,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 164,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type (OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany) of method OfflineAgency\\MongoAutoSync\\Eloquent\\Model::embedsMany() should be compatible with return type (MongoDB\\Laravel\\Relations\\EmbedsMany) of method MongoDB\\Laravel\\Eloquent\\Model::embedsMany()',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'method.childReturnType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $options of function debug_backtrace expects int, false given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of class OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany constructor expects Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>, Illuminate\\Database\\Eloquent\\Builder<OfflineAgency\\MongoAutoSync\\Eloquent\\Model> given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => 'Template type TModel on class Illuminate\\Database\\Eloquent\\Builder is not covariant. Learn more: <fg=cyan>https://phpstan.org/blog/whats-up-with-template-covariant</>',
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $related of class OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany constructor expects MongoDB\\Laravel\\Eloquent\\Model, object given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type (OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne) of method OfflineAgency\\MongoAutoSync\\Eloquent\\Model::embedsOne() should be compatible with return type (MongoDB\\Laravel\\Relations\\EmbedsOne) of method MongoDB\\Laravel\\Eloquent\\Model::embedsOne()',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'method.childReturnType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $options of function debug_backtrace expects int, false given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of class OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne constructor expects Illuminate\\Database\\Eloquent\\Builder<Illuminate\\Database\\Eloquent\\Model>, Illuminate\\Database\\Eloquent\\Builder<OfflineAgency\\MongoAutoSync\\Eloquent\\Model> given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => 'Template type TModel on class Illuminate\\Database\\Eloquent\\Builder is not covariant. Learn more: <fg=cyan>https://phpstan.org/blog/whats-up-with-template-covariant</>',
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $related of class OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne constructor expects MongoDB\\Laravel\\Eloquent\\Model, object given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php (in context of class OfflineAgency\\MongoAutoSync\\Eloquent\\Model)',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php',
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Query\\Builder::convertKey().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection extends generic class Illuminate\\Database\\Eloquent\\Collection but does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::getBySlugAndStatus() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::getBySlugAndStatus() has parameter $category with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::getBySlugAndStatus() has parameter $myslug with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$primarycategory.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$slug.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$status.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $model of method Illuminate\\Database\\Eloquent\\ModelNotFoundException<Illuminate\\Database\\Eloquent\\Model>::setModel() expects class-string<Illuminate\\Database\\Eloquent\\Model>, string given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$slug.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $model of method Illuminate\\Database\\Eloquent\\ModelNotFoundException<Illuminate\\Database\\Eloquent\\Model>::setModel() expects class-string<Illuminate\\Database\\Eloquent\\Model>, string given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$is_deleted.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$status.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 73,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 73,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$visibility.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 89,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 89,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::hasItem() has parameter $obj with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 102,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 102,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$ref_id.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 113,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 113,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::moveFirst() has parameter $id with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Cannot access property $ref_id on Illuminate\\Database\\Eloquent\\Model|null.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 134,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.nonObject',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $value of method Illuminate\\Support\\Collection<(int|string),Illuminate\\Database\\Eloquent\\Model>::prepend() expects Illuminate\\Database\\Eloquent\\Model, Illuminate\\Database\\Eloquent\\Model|null given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 134,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 134,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$is_active.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 146,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 146,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$autoincrement_id.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 168,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 168,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::hasPermission() has parameter $id with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 175,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 175,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$ref_id.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 182,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 182,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::hasRole() has parameter $name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 197,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 197,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 204,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 204,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection::checkPermission() has parameter $name with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 219,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 219,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$name.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'line' => 226,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 226,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getTranslatedContent() has parameter $mlCollection with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_null() with array<mixed, mixed> will always evaluate to false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.impossibleType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::ml() has parameter $destination with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::ml() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isML() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isML() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isMD() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isMD() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_EM() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 76,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_EM() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 76,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 76,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_EO() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_EO() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_HM() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_HM() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 86,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 86,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_HO() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::is_HO() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 91,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 91,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isEditable() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isEditable() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::hasTarget() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 105,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::hasTarget() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 105,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isFillable() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 114,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isFillable() has parameter $event with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 114,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isFillable() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 114,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getRequestToBeSync() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 126,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 126,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getRequestToBeSync() has parameter $modelOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 126,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 126,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getRequestToBeSync() has parameter $ref_id with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 126,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 126,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var with type mixed is not subtype of native type object.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 130,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 130,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Expression',
       'identifier' => 'varTag.nativeType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    27 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var for variable $items has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 132,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 132,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Expression',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    28 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getPrimaryRequest() should return string but returns string|false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 167,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 167,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    29 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::processList() has parameter $array with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 190,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 190,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    30 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::processList() should return string but returns string|false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 205,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 205,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    31 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::isRequestReadyToBeProcessed() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 208,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 208,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    32 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::removeSubCollectionInput() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 223,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 223,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    33 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::prepareRequest() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 231,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 231,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    34 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getArrayWithEmptyObj() has parameter $is_EM with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 239,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 239,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    35 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getArrayWithEmptyObj() has parameter $is_EO with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 239,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 239,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    36 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getArrayWithEmptyObj() has parameter $model with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 239,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 239,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    37 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getArrayWithEmptyObj() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 239,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 239,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    38 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var with type mixed is not subtype of native type object.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 245,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 245,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Expression',
       'identifier' => 'varTag.nativeType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    39 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var for variable $EOitems has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 247,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 247,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Expression',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    40 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getCounterForRelationships() has parameter $i with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 263,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 263,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    41 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getCounterForRelationships() has parameter $is_EM with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 263,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 263,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    42 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getCounterForRelationships() has parameter $is_EO with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 263,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 263,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    43 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper::getCounterForRelationships() has parameter $method with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 263,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 263,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    44 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Result of && is always false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 265,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 265,
       'nodeType' => 'PHPStan\\Node\\BooleanAndNode',
       'identifier' => 'booleanAnd.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    45 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using !== between mixed~\'\' and \'\' will always evaluate to true.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 265,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'Type \'\' has already been eliminated from mixed.',
       'nodeLine' => 265,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\NotIdentical',
       'identifier' => 'notIdentical.alwaysTrue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    46 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using === between mixed~\'\' and \'\' will always evaluate to false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'line' => 265,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php',
       'traitFilePath' => NULL,
       'tip' => 'Type \'\' has already been eliminated from mixed.',
       'nodeLine' => 265,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Identical',
       'identifier' => 'identical.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$dates has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 18,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$collection.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::isArray() has parameter $options with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::isCarbonDate() has parameter $options with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::validateOptions() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::validateOptions() has parameter $options with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::validateOptionValue() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::validateOptionValue() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getFieldTypeOptionsValue() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 59,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$has_partial_request has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$request has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$target_additional_data has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$partial_generated_request has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$options has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$tempEM has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeWithSync() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeWithSync() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeWithSync() has parameter $target_additional_data with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeWithSync() should return $this(OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel) but returns static(OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)|null.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateWithSync() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateWithSync() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateWithSync() has parameter $target_additional_data with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 47,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateWithSync() should return $this(OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel) but returns static(OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)|null.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::deleteTargetObj() invoked with 4 parameters, 6 required.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'arguments.count',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getOptionValue() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 105,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::checkPropertyExistence() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::checkPropertyExistence() has parameter $obj with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 116,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    27 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::checkArrayExistence() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 127,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 127,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    28 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::checkArrayExistence() has parameter $arr with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 127,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 127,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    29 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::checkRequestExistence() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 138,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 138,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    30 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getModelTobeSync() has invalid return type OfflineAgency\\MongoAutoSync\\Traits\\MDModel.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 177,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 177,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    31 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::find().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 185,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 185,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    32 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::setRequest() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 211,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 211,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    33 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_object() with array will always evaluate to false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 214,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 214,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.impossibleType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    34 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::setPartialGeneratedRequest() has parameter $arr with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 229,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 229,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    35 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getOptions() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 240,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 240,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    36 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::setOptions() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 245,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 245,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    37 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getTargetAdditionalData() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 253,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 253,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    38 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::setTargetAdditionalData() has parameter $target_additional_data with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 261,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 261,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    39 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::initDataForSync() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 266,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 266,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    40 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::initDataForSync() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 266,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 266,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    41 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::initDataForSync() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 266,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 266,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    42 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::initDataForSync() has parameter $target_additional_data with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 266,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 266,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    43 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$mini_models has no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'missingType.property',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    44 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::newCollection() should return Illuminate\\Database\\Eloquent\\Collection<(int|string), static(OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)> but returns OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    45 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getItems() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    46 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$items.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    47 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getMongoRelation() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 28,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    48 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getPageMetaTag() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 42,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    49 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$collection.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    50 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$author.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 59,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 59,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    51 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$updated_at.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 60,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 60,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    52 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$updated_at.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 61,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 61,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    53 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$title.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    54 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$excerption.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 85,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 85,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    55 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$img_evidence_text.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    56 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getFullUrlImgByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 87,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 87,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    57 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$title.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 94,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 94,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    58 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$shortDescription.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 95,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 95,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    59 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$shortDescription.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 96,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    60 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$img_evidence_text.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 97,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    61 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getFullUrlImgByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 97,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 97,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    62 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$title.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 105,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 105,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    63 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$shortDescription.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    64 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$img_evidence_text.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 107,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 107,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    65 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getFullUrlImgByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 107,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 107,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    66 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$title.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 115,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 115,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    67 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::$description.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 116,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 116,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    68 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getSiteGeneralValueByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 126,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 126,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    69 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getSiteGeneralValueByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 131,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    70 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getSiteGeneralValueByKey not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 135,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 135,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    71 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $iterator of function iterator_to_array expects iterable, Illuminate\\Contracts\\Database\\Query\\Expression given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 212,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 212,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    72 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getMiniModels() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 235,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 235,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    73 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getUniqueMiniModelList() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 245,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 245,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    74 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::populateMiniModels() has parameter $miniModelList with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 274,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 274,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    75 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::castValueToBeSaved() has parameter $item with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 305,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 305,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    76 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to function is_null() with mixed will always evaluate to false.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 316,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 316,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'function.impossibleType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    77 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getModelInstanceFromPath() should return OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel but returns object.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 335,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => NULL,
       'nodeLine' => 335,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    78 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getEmbedModel() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 368,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 368,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    79 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::getObjWithRefId() has parameter $relationship with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 384,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 384,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    80 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeEditAllItems() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    81 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::storeEditAllItems() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    82 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Instantiated class OfflineAgency\\MongoAutoSync\\Traits\\DateTime not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    83 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $milliseconds of class MongoDB\\BSON\\UTCDateTime constructor expects DateTimeInterface|int|MongoDB\\BSON\\Int64|null, OfflineAgency\\MongoAutoSync\\Traits\\DateTime given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    84 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processAllRelationships() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    85 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processAllRelationships() has parameter $options with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    86 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @throws with type OfflineAgency\\MongoAutoSync\\Traits\\Exception is not subtype of Throwable',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'throws.notThrowable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    87 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateRelationWithSync() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 120,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 120,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    88 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::updateRelationWithSync() has parameter $mini_model with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 120,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 120,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    89 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    90 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $event with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    91 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $hasTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    92 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $i with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    93 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $method with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    94 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    95 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $model with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    96 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $modelOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    97 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $modelTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    98 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $obj with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    99 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $options with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    100 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processOneEmbeddedRelationship() has parameter $type with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    101 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @throws with type OfflineAgency\\MongoAutoSync\\Traits\\Exception is not subtype of Throwable',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'throws.notThrowable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    102 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::deleteTargetObj() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 161,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    103 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::deleteTargetObj() has parameter $method with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 161,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    104 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::deleteTargetObj() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 161,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    105 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::deleteTargetObj() has parameter $modelTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 161,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 161,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    106 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::handleSubTarget() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 180,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    107 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::handleSubTarget() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 180,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    108 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::handleSubTarget() has parameter $modelTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 180,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    109 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::handleSubTarget() has parameter $target_id with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 180,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 180,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    110 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::all().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 184,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 184,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    111 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    112 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $event with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    113 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $i with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    114 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $is_EM with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    115 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $is_EO with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    116 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $method with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    117 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $model with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    118 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $obj with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    119 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $options with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    120 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnCurrentCollection() has parameter $type with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    121 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @throws with type OfflineAgency\\MongoAutoSync\\Traits\\Exception is not subtype of Throwable',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'throws.notThrowable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    122 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::getItems().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 206,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 206,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    123 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Instantiated class OfflineAgency\\MongoAutoSync\\Traits\\DateTime not found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 222,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 222,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    124 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $milliseconds of class MongoDB\\BSON\\UTCDateTime constructor expects DateTimeInterface|int|MongoDB\\BSON\\Int64|null, OfflineAgency\\MongoAutoSync\\Traits\\DateTime given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 222,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 222,
       'nodeType' => 'PhpParser\\Node\\Expr\\New_',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    125 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method object::processAllRelationships().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 237,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 237,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    126 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$attributes.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 240,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 240,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    127 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property object::$attributes.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 242,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 242,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    128 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnTargetCollection() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    129 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnTargetCollection() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    130 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnTargetCollection() has parameter $modelOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    131 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnTargetCollection() has parameter $modelTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    132 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel::processEmbedOnTargetCollection() has parameter $obj with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    133 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @throws with type OfflineAgency\\MongoAutoSync\\Traits\\Exception is not subtype of Throwable',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 252,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => NULL,
       'nodeLine' => 252,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'throws.notThrowable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    134 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method updateRelationWithSync() on an unknown class OfflineAgency\\MongoAutoSync\\Traits\\MDModel.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php (in context of class OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel)',
       'line' => 257,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
       'traitFilePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php',
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 257,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\MongoAutoSyncServiceProvider::packagePath() has parameter $path with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 49,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Query\\Builder::push().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::performDelete() should return int but returns bool.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 106,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 106,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Query\\Builder::pull().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 112,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 112,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::contains().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 128,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 128,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::attach() should return Illuminate\\Database\\Eloquent\\Model but returns bool|MongoDB\\Laravel\\Eloquent\\Model.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 224,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 224,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $model of method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::save() expects MongoDB\\Laravel\\Eloquent\\Model, Illuminate\\Database\\Eloquent\\Model given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 224,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 224,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::paginate() has parameter $columns with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 281,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 281,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::paginate() return type with generic interface Illuminate\\Contracts\\Pagination\\LengthAwarePaginator does not specify its types: TKey, TValue',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 281,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 281,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::getEmbedded() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 310,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 310,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::setEmbedded() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 318,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 318,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::setEmbedded() has parameter $models with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 318,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 318,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany::__call() has parameter $parameters with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 330,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 330,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of function call_user_func_array expects callable(): mixed, array{mixed, string} given.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'line' => 333,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 333,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne::performDelete() should return int but returns bool.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php',
       'line' => 96,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 96,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany extends generic class Illuminate\\Database\\Eloquent\\Relations\\Relation but does not specify its types: TRelatedModel, TDeclaringModel, TResult',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 11,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 11,
       'nodeType' => 'PHPStan\\Node\\InClassNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::setParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 84,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 84,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::get() has parameter $columns with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::get() return type with generic class Illuminate\\Database\\Eloquent\\Collection does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() has parameter $models with generic class Illuminate\\Database\\Eloquent\\Collection but does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() has parameter $models with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() has parameter $models with no value type specified in iterable type array|Illuminate\\Database\\Eloquent\\Collection.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() return type has no value type specified in iterable type array|Illuminate\\Database\\Eloquent\\Collection.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::saveMany() return type with generic class Illuminate\\Database\\Eloquent\\Collection does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::create() has parameter $attributes with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 145,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 145,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::setParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 152,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 152,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::create() should return MongoDB\\Laravel\\Eloquent\\Model but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 156,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 156,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::createMany() has parameter $records with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 164,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 164,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::createMany() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 164,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 164,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::getIdsArrayFrom() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 181,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 181,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::getEmbedded() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 203,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 203,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::setEmbedded() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 217,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 217,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::setEmbedded() has parameter $records with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 217,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 217,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Query\\Builder::convertKey().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 243,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 243,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::toCollection() has parameter $records with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 251,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 251,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::toCollection() return type with generic class Illuminate\\Database\\Eloquent\\Collection does not specify its types: TKey, TModel',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 251,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 251,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to private method eagerLoadRelations() of parent class Illuminate\\Database\\Eloquent\\Relations\\Relation<Illuminate\\Database\\Eloquent\\Model,Illuminate\\Database\\Eloquent\\Model,mixed>.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 260,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 260,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.private',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::toModel() has parameter $attributes with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 272,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 272,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::toModel() should return MongoDB\\Laravel\\Eloquent\\Model but empty return statement found.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 275,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 275,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.empty',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::setParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 285,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 285,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::toModel() should return MongoDB\\Laravel\\Eloquent\\Model but returns Illuminate\\Database\\Eloquent\\Model.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 292,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 292,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    27 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::getParentRelation() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\Relation does not specify its types: TRelatedModel, TDeclaringModel, TResult',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 300,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 300,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    28 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Model::getParentRelation().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 302,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 302,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    29 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Relations\\Relation::getPathHierarchy().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 344,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 344,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    30 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method Illuminate\\Database\\Eloquent\\Relations\\Relation::getPathHierarchy().',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 356,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 356,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    31 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::getUpdateValues() has parameter $array with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 378,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 378,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    32 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany::getUpdateValues() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'line' => 378,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 378,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getTranslatedContent() has parameter $mlCollection with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function ml() has parameter $destination with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function ml() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isML() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isML() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isMD() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isMD() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_EM() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_EM() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_EO() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 64,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_EO() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 64,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 64,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_HM() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 71,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_HM() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 71,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_HO() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function is_HO() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isEditable() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 85,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 85,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isEditable() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 85,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 85,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function hasTarget() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function hasTarget() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 92,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 92,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isFillable() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isFillable() has parameter $event with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isFillable() has parameter $value with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 98,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 98,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getRequestToBeSync() has parameter $methodOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getRequestToBeSync() has parameter $modelOnTarget with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getRequestToBeSync() has parameter $ref_id with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 108,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 108,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getAID() should return string but returns int.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 131,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 131,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Return_',
       'identifier' => 'return.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function processList() has parameter $array with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 140,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 140,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    27 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function isRequestReadyToBeProcessed() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 147,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 147,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    28 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function removeSubCollectionInput() has no return type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 154,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 154,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    29 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function prepareRequest() has parameter $additionalData with no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 165,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 165,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    30 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getArrayWithEmptyObj() has parameter $is_EM with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 176,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    31 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getArrayWithEmptyObj() has parameter $is_EO with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 176,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    32 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getArrayWithEmptyObj() has parameter $model with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 176,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    33 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getArrayWithEmptyObj() return type has no value type specified in iterable type array.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 176,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 176,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    34 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getCounterForRelationships() has parameter $i with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 187,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 187,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    35 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getCounterForRelationships() has parameter $is_EM with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 187,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 187,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    36 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getCounterForRelationships() has parameter $is_EO with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 187,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 187,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    37 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Function getCounterForRelationships() has parameter $method with no type specified.',
       'file' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'line' => 187,
       'canBeIgnored' => true,
       'filePath' => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 187,
       'nodeType' => 'PHPStan\\Node\\InFunctionNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 33,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Console\\Command',
        1 => '__construct',
        2 => 34,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Eloquent\\EmbedsRelationships',
        1 => 9,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Arr',
        1 => 'set',
        2 => 30,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Eloquent\\EmbedsRelationships',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'is_EM',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
      1 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'is_EO',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
      2 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'is_HM',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
      3 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'is_HO',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
      4 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'removeSubCollectionInput',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
      5 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        1 => 'getCounterForRelationships',
        2 => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Http\\Request',
        ),
        1 => 'merge',
        2 => 145,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        1 => 'getItems',
        2 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
      ),
      1 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        1 => 'getMongoRelation',
        2 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
      ),
      2 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        1 => 'getId',
        2 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
      ),
      3 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        1 => 'getCollection',
        2 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'validateOptions',
        2 => 17,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'validateOptions',
        2 => 29,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'validateOptionValue',
        2 => 63,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'checkRequestExistence',
        2 => 195,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Http\\Request',
        ),
        1 => 'merge',
        2 => 232,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'checkRequestExistence',
        2 => 31,
      ),
      6 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'processEmbedOnCurrentCollection',
        2 => 148,
      ),
      7 => 
      array (
        0 => 
        array (
          0 => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
        ),
        1 => 'processEmbedOnTargetCollection',
        2 => 152,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
        1 => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
        2 => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
        3 => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
        4 => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\MongoAutoSyncServiceProvider',
        1 => 'packagePath',
        2 => 'OfflineAgency\\MongoAutoSync\\MongoAutoSyncServiceProvider',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany',
        1 => 'whereInMethod',
        2 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne',
        1 => 'whereInMethod',
        2 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany',
        1 => 'whereInMethod',
        2 => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany',
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
        1 => 8,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
        1 => 11,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
        1 => 14,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
        1 => 10,
      ),
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
        1 => 10,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php' => 
  array (
    'fileHash' => '5d6a207bc579f9ac6e852d7198610dad193e059c',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php' => 
  array (
    'fileHash' => '238978d67548d3a419454ac8a8254eb1d37d0afe',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php' => 
  array (
    'fileHash' => '58fc9f86a6d6f439437a957ebd831aaa14a1df89',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php' => 
  array (
    'fileHash' => 'decd1311c203ee9ed3ae14752f6287a84064b30a',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      5 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php' => 
  array (
    'fileHash' => 'fbfb8a0cc5958ae2a944e9c1ec06225ed3cebb92',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php' => 
  array (
    'fileHash' => '4586ba8fa8f97b12b6a51f1a870d76ba964eb456',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php' => 
  array (
    'fileHash' => '02597d9acc775b7aed7aff3e7268825cf1b8f0b6',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php' => 
  array (
    'fileHash' => '0b24dc91fd2c6fff1006dd31d6a7e82e3d334881',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php' => 
  array (
    'fileHash' => '0872ed4daa12ab2d8d39248615eef32f6d548959',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php' => 
  array (
    'fileHash' => 'b2d5364db368a3fc89efe8ae5c299662e3e0f3ab',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MSModel.php' => 
  array (
    'fileHash' => '440170bc1690bb27cf85424eb626aaf351b5e119',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php' => 
  array (
    'fileHash' => '01ebf21f812f0229f493fac7b59ecb1257bc02ba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php' => 
  array (
    'fileHash' => '950ebc5d7576cb213bbc7bedf64890813ae58cb7',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php' => 
  array (
    'fileHash' => '0a8a7cf06e55bae7fda2220e96b79b7d5c23e48f',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php' => 
  array (
    'fileHash' => 'b25a8e00270e4571cba04c1da0ed519e9bc0b773',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php' => 
  array (
    'fileHash' => '6013910a53c945bf9f3ce88f7f02bf00cfc844f7',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php' => 
  array (
    'fileHash' => 'e6aa8c84b1af7f3c8ac40812912c40b121db6e06',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php' => 
  array (
    'fileHash' => 'bf1c01f051785d9692271a9b33e563a066a823ee',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php' => 
  array (
    'fileHash' => 'f32499a0c6edee1eac86391df1386c2fa82bfa18',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php' => 
  array (
    'fileHash' => 'c35601c69de9bd66ce3dec0102d9528331fce76e',
    'dependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      3 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      4 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
    'usedTraitDependentFiles' => 
    array (
      0 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php',
      1 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php',
      2 => '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php',
    ),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php' => 
  array (
    'fileHash' => 'da0cd614eafe8a3cbb1136b531870c96b3686e89',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/DropCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Console\\DropCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new command instance.
     *
     * @return void
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return void |null
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getModelPathByName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection_name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkOaModels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection_name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Console/GenerateModelDocumentation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new command instance.
     *
     * @return void
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return void |null
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getModelPathByName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection_name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkOaModels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Console',
             'uses' => 
            array (
              'exception' => 'Exception',
              'command' => 'Illuminate\\Console\\Command',
              'str' => 'Illuminate\\Support\\Str',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collection_name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Builder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Builder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MongoDB\\Laravel\\Eloquent\\Builder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insert',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'insertGetId',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sequence',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'increment',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'amount',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'extra',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decrement',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'amount',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'extra',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'chunkById',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'count',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'callback',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'alias',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'raw',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expression',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addUpdatedAtColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add the "updated at" column to an array of values.
     * TODO Remove if https://github.com/laravel/framework/commit/6484744326531829341e1ff886cc9b628b20d73e
     * wiil be reverted
     * Issue in laravel frawework https://github.com/laravel/framework/issues/27791.
     *
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'eloquentbuilder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'mongodbeloquentbuilder' => 'MongoDB\\Laravel\\Eloquent\\Builder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/EmbedsRelationships.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\EmbedsRelationships',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'embedsMany',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define an embedded one-to-many relationship.
     *
     * @param  string  $related
     * @param  string  $localKey
     * @param  string  $foreignKey
     * @param  string  $relation
     * @return EmbedsMany
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'str' => 'Illuminate\\Support\\Str',
              'embedsmany' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany',
              'embedsone' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'related',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'localKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'foreignKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'embedsOne',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define an embedded one-to-many relationship.
     *
     * @param  string  $related
     * @param  string  $localKey
     * @param  string  $foreignKey
     * @param  string  $relation
     * @return EmbedsOne
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'str' => 'Illuminate\\Support\\Str',
              'embedsmany' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany',
              'embedsone' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'related',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'localKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'foreignKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Eloquent/Model.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Model',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'MongoDB\\Laravel\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Eloquent\\EmbedsRelationships',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'basemodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'str' => 'Illuminate\\Support\\Str',
              'mongodbmodel' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'basemodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'str' => 'Illuminate\\Support\\Str',
              'mongodbmodel' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newEloquentBuilder',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Eloquent',
             'uses' => 
            array (
              'basemodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'arr' => 'Illuminate\\Support\\Arr',
              'str' => 'Illuminate\\Support\\Str',
              'mongodbmodel' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Extensions/MongoCollection.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Collection',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBySlugAndStatus',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'category',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'myslug',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBySlug',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  null  $myslug
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'myslug',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getNotDeleted',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MongoCollection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPublished',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MongoCollection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPublic',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MongoCollection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasItem',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'obj',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'moveFirst',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return $this
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MongoCollection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'exist',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findByAID',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'aid',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasPermission',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasRole',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkPermission',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Extensions',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'modelnotfoundexception' => 'Illuminate\\Database\\Eloquent\\ModelNotFoundException',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Helpers/SyncHelper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTranslatedContent',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array|null  $mlCollection
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mlCollection',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cl',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string current Lang
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ml',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array|null  $destination
     * @param  string  $input
     * @return array ready to be saved
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'destination',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'input',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isML',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMD',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_EM',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_EO',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_HM',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'is_HO',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEditable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasTarget',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isFillable',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRequestToBeSync',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Request
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ref_id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'methodOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPrimaryRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  string|null  $request
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAID',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'MongoDB\\Laravel\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processList',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array  $array
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'array',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isRequestReadyToBeProcessed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'removeSubCollectionInput',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Request
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getArrayWithEmptyObj',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCounterForRelationships',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Helpers',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'config' => 'Illuminate\\Support\\Facades\\Config',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'i',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultGeo.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\DefaultGeo',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/DefaultMini.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\DefaultMini',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MDModel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
        1 => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
        2 => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
        3 => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
        4 => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connection',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dates',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getId',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Http\\Models',
             'uses' => 
            array (
              'eloquent' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Model',
              'helper' => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
              'mainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
              'modeladditionalmethod' => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
              'plainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
              'relationshipmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCollection',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Http\\Models',
             'uses' => 
            array (
              'eloquent' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Model',
              'helper' => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
              'mainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
              'modeladditionalmethod' => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
              'plainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
              'relationshipmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRandom',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  int  $size
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Http\\Models',
             'uses' => 
            array (
              'eloquent' => 'OfflineAgency\\MongoAutoSync\\Eloquent\\Model',
              'helper' => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
              'mainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
              'modeladditionalmethod' => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
              'plainmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
              'relationshipmongotrait' => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Http/Models/MSModel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MSModel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connection',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/MongoAutoSyncServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\MongoAutoSyncServiceProvider',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Service provider.
 */',
         'namespace' => 'OfflineAgency\\MongoAutoSync',
         'uses' => 
        array (
          'baseserviceprovider' => 'Illuminate\\Support\\ServiceProvider',
          'dropcollection' => 'OfflineAgency\\MongoAutoSync\\Console\\DropCollection',
          'generatemodeldocumentation' => 'OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap the application services.
     *
     * @return void
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync',
             'uses' => 
            array (
              'baseserviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'dropcollection' => 'OfflineAgency\\MongoAutoSync\\Console\\DropCollection',
              'generatemodeldocumentation' => 'OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register the application services.
     *
     * @return void
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync',
             'uses' => 
            array (
              'baseserviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'dropcollection' => 'OfflineAgency\\MongoAutoSync\\Console\\DropCollection',
              'generatemodeldocumentation' => 'OfflineAgency\\MongoAutoSync\\Console\\GenerateModelDocumentation',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsMany.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsMany',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initRelation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getResults',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performInsert',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save a new model and attach it to the parent model.
     *
     * @return Model|bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save an existing model and attach it to the parent model.
     *
     * @return Model|bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete an existing model and detach it from the parent model.
     *
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'associate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Associate the model instance to the given parent, without saving it to the database.
     *
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dissociate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Dissociate the model instance from the given parent, without saving it to the database.
     *
     * @param  mixed  $ids
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy the embedded models for the given IDs.
     *
     * @param  mixed  $ids
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete all embedded models.
     *
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'detach',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Destroy alias.
     *
     * @param  mixed  $ids
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'attach',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save alias.
     *
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'associateNew',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Associate a new model instance to the given parent, without saving it to the database.
     *
     * @param  Model  $model
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'associateExisting',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Associate an existing model instance to the given parent, without saving it to the database.
     *
     * @param  Model  $model
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paginate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  null  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  null  $page
     * @return \\Illuminate\\Contracts\\Pagination\\LengthAwarePaginator
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'pageName',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'page',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEmbedded',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setEmbedded',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__call',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parameters',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereInMethod',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the name of the "where in" method for eager loading.
     *
     * @param  string  $key
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
              'paginator' => 'Illuminate\\Pagination\\Paginator',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOne.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOne',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initRelation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getResults',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performInsert',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save a new model and attach it to the parent model.
     *
     * @return Model|bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Save an existing model and attach it to the parent model.
     *
     * @return Model|bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'performDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete an existing model and detach it from the parent model.
     *
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'associate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attach the model to its parent.
     *
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dissociate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Detach the model from its parent.
     *
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Delete all embedded models.
     *
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereInMethod',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the name of the "where in" method for eager loading.
     *
     * @param  string  $key
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'objectid' => 'MongoDB\\BSON\\ObjectID',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Relationships/EmbedsOneOrMany.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Relationships\\EmbedsOneOrMany',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'localKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The local key of the parent model.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'foreignKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The foreign key of the parent model.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'relation',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "name" of the relationship.
     *
     * @var string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new embeds many relationship instance.
     *
     * @param  string  $localKey
     * @param  string  $foreignKey
     * @param  string  $relation
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'query',
               'type' => 'Illuminate\\Database\\Eloquent\\Builder',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parent',
               'type' => 'MongoDB\\Laravel\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'related',
               'type' => 'MongoDB\\Laravel\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'localKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'foreignKey',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addConstraints',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addEagerConstraints',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'match',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'results',
               'type' => 'Illuminate\\Database\\Eloquent\\Collection',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relation',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'get',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shorthand to get the results of the relationship.
     *
     * @param  array  $columns
     * @return Collection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'count',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the number of embedded models.
     *
     * @return int
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attach a model instance to the parent model.
     *
     * @return Model|bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'MongoDB\\Laravel\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveMany',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attach a collection of models to the parent instance.
     *
     * @param  Collection|array  $models
     * @return Collection|array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new instance of the related model.
     *
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attributes',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createMany',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an array of new instances of the related model.
     *
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'records',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getIdsArrayFrom',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Transform single ID, single Model or array of Models into an array of IDs.
     *
     * @param  mixed  $ids
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'ids',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEmbedded',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setEmbedded',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'records',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getForeignKeyValue',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the foreign key value for the relation.
     *
     * @param  mixed  $id
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toCollection',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Convert an array of records to a Collection.
     *
     * @return Collection
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'records',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toModel',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a related model instanced.
     *
     * @param  array  $attributes
     * @return Model
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'attributes',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getParentRelation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the relation instance of the parent.
     *
     * @return Relation
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getQuery',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBaseQuery',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isNested',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if this relation is nested in another relation.
     *
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPathHierarchy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the fully qualified local key name.
     *
     * @param  string  $glue
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'glue',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getQualifiedParentKeyName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getParentKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the primary key value of the parent.
     *
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUpdateValues',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Return update values.
     *
     * @param  string  $prepend
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'array',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prepend',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getQualifiedForeignKeyName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the foreign key for the relationship.
     *
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'whereInMethod',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the name of the "where in" method for eager loading.
     *
     * @param  string  $key
     * @return string
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Relationships',
             'uses' => 
            array (
              'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
              'collection' => 'Illuminate\\Database\\Eloquent\\Collection',
              'eloquentmodel' => 'Illuminate\\Database\\Eloquent\\Model',
              'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
              'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'Illuminate\\Database\\Eloquent\\Model',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/Helper.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Traits\\Helper',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool|mixed
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCarbonDate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool|mixed
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/MainMongoTrait.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Traits\\MainMongoTrait',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'has_partial_request',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'request',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'target_additional_data',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'partial_generated_request',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'options',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tempEM',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeWithSync',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return $this
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'target_additional_data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateWithSync',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return $this
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'target_additional_data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroyWithSync',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return $this
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkPropertyExistence',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  string  $method
     * @param  string  $model
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'obj',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'EOkey',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'checkArrayExistence',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arr',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getIsSkippable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $request_has_key
     * @param  bool  $hasTarget
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request_has_key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hasTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getHasPartialRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return bool
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setHasPartialRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Request
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPartialGeneratedRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return Request
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setPartialGeneratedRequest',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arr',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setOptions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTargetAdditionalData',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setTargetAdditionalData',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  array  $target_additional_data
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'target_additional_data',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initDataForSync',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'additionalData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'target_additional_data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/ModelAdditionalMethod.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Traits\\ModelAdditionalMethod',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mini_models',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newCollection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'models',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getItems',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMongoRelation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPageMetaTag',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     *
     * @deprecated This method contains hardcoded business logic and will be removed in future versions.
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRandomRow',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return mixed
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'numberOfRandomRow',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setMiniModels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return void
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMiniModels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUniqueMiniModelList',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'populateMiniModels',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return mixed
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'miniModelList',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getFreshMiniModel',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MDModel
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mini_model_path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'castValueToBeSaved',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array|mixed|UTCDateTime|null
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'item',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mini_model_path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getModelInstanceFromPath',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return MDModel
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mini_model_path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getObjValueToBeSaved',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $rewrite_ref_id_key
     * @return mixed
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mini_model_path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'rewrite_ref_id_key',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getEmbedModel',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'key',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getObjWithRefId',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return false|string
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'datetime' => 'DateTime',
              'exception' => 'Exception',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'mongocollection' => 'OfflineAgency\\MongoAutoSync\\Extensions\\MongoCollection',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
              'mdmodel' => 'OfflineAgency\\MongoAutoSync\\Http\\Models\\MDModel',
              'stdclass' => 'stdClass',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'relationship',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/PlainMongoTrait.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Traits\\PlainMongoTrait',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storeEditAllItems',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'exception' => 'Exception',
              'request' => 'Illuminate\\Http\\Request',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/Traits/RelationshipMongoTrait.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'OfflineAgency\\MongoAutoSync\\Traits\\RelationshipMongoTrait',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processAllRelationships',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parent',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'counter',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateRelationWithSync',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mini_model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method_on_target',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processOneEmbeddedRelationship',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $is_EO
     * @param  bool  $is_EM
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     * @param  bool  $is_embeds_has_to_be_updated
     *
     * @throws Exception
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'obj',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            6 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'methodOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            7 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            8 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            9 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'hasTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            10 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            11 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            12 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            13 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            14 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'i',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            15 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_embeds_has_to_be_updated',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            16 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteTargetObj',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $is_EO
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'methodOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handleSubTarget',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @param  bool  $is_EO_target
     * @param  bool  $is_EM_target
     */',
             'namespace' => 'OfflineAgency\\MongoAutoSync\\Traits',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
              'utcdatetime' => 'MongoDB\\BSON\\UTCDateTime',
              'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'target_id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'modelTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'methodOnTarget',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EO_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_EM_target',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/gfabbian/projects/laravel-mongo-auto-sync/src/syncUtils.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getTranslatedContent',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @param  array  $mlCollection
     * @return string
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'mlCollection',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    1 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'cl',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return string current Lang
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
    2 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'ml',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @param  array  $destination
     * @param  string  $input
     * @return array ready to be saved
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'destination',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'input',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    3 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'isML',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    4 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'isMD',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    5 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'is_EM',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    6 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'is_EO',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    7 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'is_HM',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    8 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'is_HO',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    9 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'isEditable',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    10 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'hasTarget',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    11 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'isFillable',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'value',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'event',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    12 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getRequestToBeSync',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return Request
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'ref_id',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'modelOnTarget',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'request',
           'type' => 'Illuminate\\Http\\Request',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'methodOnTarget',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    13 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getPrimaryRequest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @param  string  $request
     * @return string
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'request',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    14 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getAID',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return string
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'model',
           'type' => 'MongoDB\\Laravel\\Eloquent\\Model',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    15 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'processList',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @param  array  $array
     * @return string
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'array',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    16 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'isRequestReadyToBeProcessed',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'request',
           'type' => 'Illuminate\\Http\\Request',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    17 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'removeSubCollectionInput',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'request',
           'type' => 'Illuminate\\Http\\Request',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    18 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'prepareRequest',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return Request
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'request',
           'type' => 'Illuminate\\Http\\Request',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'additionalData',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    19 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getArrayWithEmptyObj',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return array
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'model',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'is_EO',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'is_EM',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
    20 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'getCounterForRelationships',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * @return string
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'model' => 'MongoDB\\Laravel\\Eloquent\\Model',
          'synchelper' => 'OfflineAgency\\MongoAutoSync\\Helpers\\SyncHelper',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'method',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'is_EO',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'is_EM',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'i',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
