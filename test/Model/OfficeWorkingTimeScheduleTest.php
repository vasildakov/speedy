<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\OfficeWorkingTimeSchedule;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class OfficeWorkingTimeScheduleTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class OfficeWorkingTimeScheduleTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, OfficeWorkingTimeSchedule::class, 'json');

        $this->assertInstanceOf(\DateTime::class, $instance->getDate());
        $this->assertInstanceOf(\DateTime::class, $instance->getWorkingTimeFrom());
        $this->assertInstanceOf(\DateTime::class, $instance->getWorkingTimeTo());
        $this->assertInstanceOf(\DateTime::class, $instance->getSameDayDepartureCutoff());
        $this->assertEquals($array['standardSchedule'], $instance->isStandardSchedule());
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new OfficeWorkingTimeSchedule())->toArray());
    }
    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }

    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/OfficeWorkingTimeSchedule.json");

        return $json;
    }
}
