<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentPhoneNumber;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentPhoneNumberTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPhoneNumberTest extends TestCase 
{
    /**
     * @var string
     */
    protected string $number;

    /**
     * @param string
     */
    protected function setUp(): void 
    {
        $this->number = '0888302050';
        $this->extension ='Extension';
    }
    
    /**
     * @group phone
     */
    public function testItCanBeCreated() 
    {
        $object = new ShipmentPhoneNumber($this->number);
        $this->assertInstanceOf(ShipmentPhoneNumber::class, $object);
        
        //$this->assertSame($this->number, $shipmentPhoneNumber->getNumber());
    }
    
    public function testItCanRetrieveTheNumber() 
    {
        $object = new ShipmentPhoneNumber($this->number); 
        $this->assertEquals($this->number, $object->getNumber());
    }

    public function testItCanRetrieveTheExtension()
    {
        $object = new ShipmentPhoneNumber($this->number);

        $object->setExtension('123');

        $this->assertEquals('123', $object->getExtension());
    }

    public function testItCanBeConvertedAsArray()
    {
        $object = new ShipmentPhoneNumber($this->number);
        $this->assertIsArray($object->toArray());
    }

    public function testExportedArrayHasRequiredKeys()
    {
        $object = new ShipmentPhoneNumber($this->number);
        $array = $object->toArray();
        $this->assertArrayHasKey(Speedy::NUMBER, $array);
        $this->assertArrayHasKey(Speedy::EXTENSION, $array);
    }
}
