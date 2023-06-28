<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use ReflectionClass;

use function is_object;
use function method_exists;

trait ToArray
{
    public function toArray(): array
    {
        $array = [];

        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties();

        foreach ($properties as $property) {
            if ($property->getValue($this)) {
                $value = $property->getValue($this);
                if (
                    is_object($value) &&
                    method_exists($value, 'toArray')
                ) {
                    $array[$property->getName()] = $value->toArray();
                } else {
                    $array[$property->getName()] = $property->getValue($this);
                }
            }
        }

        return $array;
    }
}
