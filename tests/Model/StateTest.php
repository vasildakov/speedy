<?php

declare(strict_types=1);

namespace VasilDakov\tests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\State;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class StateTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 */
class StateTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), State::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new State())->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/State.json');
    }

    /**
     * @throws \JsonException
     */
    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }
}
