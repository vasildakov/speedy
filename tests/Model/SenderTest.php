<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Sender;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class SenderTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class SenderTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $sender = new Sender();
        $sender->setDropoffOfficeId(1);

        $this->assertEquals(1, $sender->getDropoffOfficeId());

        /* $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Sender::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json); */
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Sender())->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents('./test/Assets/Sender.json');
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
