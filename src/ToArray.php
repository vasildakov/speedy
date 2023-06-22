<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use ReflectionClass;

trait ToArray
{
    public function toArray(): array
    {
        $array = [];

        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties();

        foreach ($properties as $property) {
            if ($property->getValue($this)) {
                $array[$property->getName()] = $property->getValue($this);
            }
        }

        return $array;
    }
}
