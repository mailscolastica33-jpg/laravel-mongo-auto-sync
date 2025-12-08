<?php

namespace OfflineAgency\MongoAutoSync\Eloquent;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use MongoDB\Driver\Cursor;
use MongoDB\Laravel\Eloquent\Builder as MongoDbEloquentBuilder;
use MongoDB\Model\BSONDocument;

/**
 * @template TModel of \Illuminate\Database\Eloquent\Model
 * @extends MongoDbEloquentBuilder<TModel>
 */
class Builder extends MongoDbEloquentBuilder
{
    /**
     * {@inheritdoc}
     * @param  array<mixed>  $values
     * @param  array<mixed>  $options
     */
    public function update(array $values, array $options = [])
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            /** @var \OfflineAgency\MongoAutoSync\Relationships\EmbedsOneOrMany $relation */
            $relation->performUpdate($this->model, $values); // @phpstan-ignore-line

            return 1;
        }

        return $this->toBase()->update($this->addUpdatedAtColumn($values), $options);
    }

    /**
     * {@inheritdoc}
     * @param  array<mixed>  $values
     * @return bool
     */
    public function insert(array $values)
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            $relation->performInsert($this->model, $values); // @phpstan-ignore-line

            return true;
        }

        return EloquentBuilder::insert($values);
    }

    /**
     * {@inheritdoc}
     * @param  array<mixed>  $values
     * @param  string|null  $sequence
     * @return mixed
     */
    public function insertGetId(array $values, $sequence = null)
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            $relation->performInsert($this->model, $values); // @phpstan-ignore-line

            return $this->model->getKey();
        }

        return EloquentBuilder::insertGetId($values, $sequence);
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            $relation->performDelete($this->model); // @phpstan-ignore-line

            return $this->model->getKey();
        }

        return EloquentBuilder::delete();
    }

    /**
     * {@inheritdoc}
     * @param  string|Illuminate\Contracts\Database\Query\Expression  $column
     * @param  float|int  $amount
     * @param  array<mixed>  $extra
     * @return int
     */
    public function increment($column, $amount = 1, array $extra = [])
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            /** @var \OfflineAgency\MongoAutoSync\Relationships\EmbedsOneOrMany $relation */
            $value = $this->model->{$column};

            // When doing increment and decrements, Eloquent will automatically
            // sync the original attributes. We need to change the attribute
            // temporary in order to trigger an update query.
            $this->model->{$column} = null;

            if (is_string($column)) {
                $this->model->syncOriginalAttribute($column);
            }

            // @phpstan-ignore-next-line
            $result = $this->model->update([$column => $value]);

            return $result;
        }

        return EloquentBuilder::increment($column, $amount, $extra);
    }

    /**
     * {@inheritdoc}
     * @param  string|Illuminate\Contracts\Database\Query\Expression  $column
     * @param  float|int  $amount
     * @param  array<mixed>  $extra
     * @return int
     */
    public function decrement($column, $amount = 1, array $extra = [])
    {
        // Intercept operations on embedded models and delegate logic
        // to the parent relation instance.
        // @phpstan-ignore-next-line
        if (method_exists($this->model, 'getParentRelation') && $relation = $this->model->getParentRelation()) {
            /** @var \OfflineAgency\MongoAutoSync\Relationships\EmbedsOneOrMany $relation */
            $value = $this->model->{$column};

            // When doing increment and decrements, Eloquent will automatically
            // sync the original attributes. We need to change the attribute
            // temporary in order to trigger an update query.
            $this->model->{$column} = null;

            if (is_string($column)) {
                $this->model->syncOriginalAttribute($column);
            }

            // @phpstan-ignore-next-line
            return $this->model->update([$column => $value]);
        }

        return EloquentBuilder::decrement($column, $amount, $extra);
    }

    /**
     * {@inheritdoc}
     */
    public function chunkById($count, callable $callback, $column = '_id', $alias = null)
    {
        return EloquentBuilder::chunkById($count, $callback, $column, $alias);
    }

    /**
     * {@inheritdoc}
     * @return \Illuminate\Database\Eloquent\Collection<int, TModel>|BSONDocument|TModel|array<mixed>|\Illuminate\Contracts\Database\Query\Expression
     */
    public function raw($expression = null)
    {
        // Get raw results from the query builder.
        $results = $this->query->raw($expression);

        // Convert MongoCursor results to a collection of models.
        if ($results instanceof Cursor) {
            $results = iterator_to_array($results, false);

            /** @var \Illuminate\Database\Eloquent\Collection<int, TModel> */
            return $this->model->hydrate($results);
        } // Convert Mongo BSONDocument to a single object.
        elseif ($results instanceof BSONDocument) {
            $results = $results->getArrayCopy();

            /** @var TModel */
            return $this->model->newFromBuilder((array) $results);
        } // The result is a single object.
        elseif (is_array($results) && array_key_exists('_id', $results)) {
            /** @var TModel */
            return $this->model->newFromBuilder((array) $results);
        }

        return $results;
    }

    /**
     * Add the "updated at" column to an array of values.
     * TODO Remove if https://github.com/laravel/framework/commit/6484744326531829341e1ff886cc9b628b20d73e
     * wiil be reverted
     * Issue in laravel frawework https://github.com/laravel/framework/issues/27791.
     *
     * @param  array<mixed>  $values
     * @return array<mixed>
     */
    protected function addUpdatedAtColumn(array $values)
    {
        if (! $this->model->usesTimestamps() || $this->model->getUpdatedAtColumn() === null) {
            return $values;
        }

        $column = $this->model->getUpdatedAtColumn();
        $values = array_merge(
            [$column => $this->model->freshTimestampString()],
            $values
        );

        return $values;
    }
}
