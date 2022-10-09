<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use JsonException;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Site;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class SiteTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class SiteTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Site::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Site())->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents("./test/Assets/Site.json");
    }

    /**
     * @throws JsonException
     */
    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512,JSON_THROW_ON_ERROR);
    }
}