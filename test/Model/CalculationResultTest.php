<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\CalculationResult;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class CalculationResultTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class CalculationResultTest extends TestCase
{
    public function testConstructor(): void
    {
        $instance = new CalculationResult();

        $this->assertInstanceOf(CalculationResult::class, $instance);
    }

    public function testAccessors(): void
    {
        $serializer = (new SerializerFactory())();

        /** @var CalculationResult $instance */
        $instance = $serializer->deserialize($this->getJson(), CalculationResult::class, 'json');

        $this->assertInstanceOf(CalculationResult::class, $instance);

        // serialize: create a json from object, testing GETTERS
        $json = $serializer->serialize($instance, 'json');

        $this->assertIsString($json);
    }

    private function getArray(): array
    {
        return json_decode($this->getJson(), true);
    }

    private function getJson(): string
    {
        return file_get_contents("./test/Assets/CalculationResult.json");
    }
}
