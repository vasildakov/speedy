<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Traits;

use ReflectionClass;
use RuntimeException;
use VasilDakov\Speedy\Property;

trait ToArray
{
    /**
     * @param string $name
     * @return Property|null
     * @throws RuntimeException
     */
    private function getProperty(string $name): ?Property
    {
        $cases = Property::cases();
        $key   = \array_search($name, \array_column($cases, 'value'));

        $property = Property::tryFrom($cases[$key]->value);

        if (! $property instanceof Property) {
            throw new RuntimeException(
                \sprintf('Property % can not be found', $name)
            );
        }

        return $property;
    }

    public function toArray(): array
    {
        $array = [];

        $reflection = new ReflectionClass($this);
        $classProperties = $reflection->getProperties();

        foreach ($classProperties as $classProperty) {
            if ($classProperty->getValue($this)) {
                $value = $classProperty->getValue($this);
                $name  = $classProperty->getName();

                $property = $this->getProperty($name);

                if (\is_object($value) && \method_exists($value, 'toArray')) {
                    $array[$property->value] = $value->toArray();
                } else {
                    $array[$property->value] = $classProperty->getValue($this);
                }
            }
        }

        return $array;
    }
}
