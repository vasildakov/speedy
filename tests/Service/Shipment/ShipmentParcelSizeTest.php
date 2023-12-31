<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentParcelSize;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentParcelSizeTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentParcelSizeTest extends TestCase
{
    protected int $width;

    protected int $depth;

    protected int $height;

    protected function setUp(): void
    {
        $this->width = 1;
        $this->depth = 2;
        $this->height = 3;

        parent::setUp();
    }

    public function testItCanBeCreated(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertInstanceOf(ShipmentParcelSize::class, $object);
    }

    public function testItCanRetrieveTheWidth(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->width, $object->getWidth());
    }

    public function testItCanRetrieveTheDepth(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->depth, $object->getDepth());
    }

    public function testItCanRetrieveTheHeight(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->height, $object->getHeight());
    }

    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::WIDTH, $array);
        $this->assertArrayHasKey(Speedy::DEPTH, $array);
        $this->assertArrayHasKey(Speedy::HEIGHT, $array);
    }
}
