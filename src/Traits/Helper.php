<?php

namespace OfflineAgency\MongoAutoSync\Traits;

use Illuminate\Support\Arr;
use OfflineAgency\MongoAutoSync\Exceptions\InvalidConfigurationException;

trait Helper
{
    /**
     * @return bool|mixed
     *
     * @throws InvalidConfigurationException
     */
    public function isArray($options)
    {
        $this->validateOptions($options);

        return $this->getFieldTypeOptionsValue($options, 'is-array', 'boolean');
    }

    /**
     * @return bool|mixed
     *
     * @throws InvalidConfigurationException
     */
    public function isCarbonDate($options)
    {
        $this->validateOptions($options);

        return $this->getFieldTypeOptionsValue($options, 'is-carbon-date', 'boolean');
    }

    /**
     * @throws InvalidConfigurationException
     */
    private function validateOptions($options)
    {
        if (gettype($options) !== 'array') {
            throw new InvalidConfigurationException($options.' is not a valid array!');
        }
    }

    /**
     * @throws InvalidConfigurationException
     */
    private function validateOptionValue($value, string $expected)
    {
        if (gettype($value) !== $expected) {
            throw new InvalidConfigurationException($value.' is not a valid '.$expected.' found '.gettype($value).'! Check on your model configurations.');
        }
    }

    /**
     * @return bool|mixed
     *
     * @throws InvalidConfigurationException
     */
    private function getFieldTypeOptionsValue(array $options, string $key, string $expected)
    {
        if (Arr::has($options, $key)) {
            $value = Arr::get($options, $key);
            $this->validateOptionValue($value, $expected);

            return $value;
        } else {
            return false;
        }
    }
}
