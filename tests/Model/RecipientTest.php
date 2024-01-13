<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Recipient;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class RecipientTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class RecipientTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();
        $instance = $serializer->deserialize($this->getJson(), Recipient::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Recipient())->toArray());
    }

    /**
     * @throws \JsonException
     */
    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }

    private function getJson(): string
    {
        return \file_get_contents('./tests/Assets/Recipient.json');
    }
}
