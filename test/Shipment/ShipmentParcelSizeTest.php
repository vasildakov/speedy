<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentParcelSize;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentParcelSizeTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentParcelSizeTest extends TestCase
{
    /**
     * @var int
     */
    protected int $width;

    /**
     * @var int
     */
    protected int $depth;

    /**
     * @var int
     */
    protected int $height;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->width = 1;
        $this->depth = 2;
        $this->height =3;

    parent::setUp();
    }

    /**
     * @return void
     */
    public function testItCanBeCreated() :void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertInstanceOf(ShipmentParcelSize::class, $object);
    }

    /**
     * @return void
     */
    public function testItCanRetrieveTheWidth():void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->width, $object->getWidth());
    }

    /**
     * @return void
     */
    public function testItCanRetrieveTheDepth():void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->depth, $object->getDepth());
    }

    /**
     * @return void
     */
    public function testItCanRetrieveTheHeight():void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $this->assertEquals($this->height, $object->getHeight());
    }

    /**
     * @return void
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new ShipmentParcelSize($this->width, $this->depth, $this->height);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::WIDTH, $array);
        $this->assertArrayHasKey(Speedy::DEPTH, $array);
        $this->assertArrayHasKey(Speedy::HEIGHT, $array);
    }
}