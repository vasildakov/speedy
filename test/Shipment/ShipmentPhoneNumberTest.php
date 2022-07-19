<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentPhoneNumber;

/**
 * Class ShipmentPhoneNumberTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @todo https://api.speedy.bg/web-api.html?fbclid=IwAR1pcF0uXsAZheAKesQcArBJ7QenkDVyEz36aXwfRGCQZvcInjIYMuE82E4#href-ds-shipment-phone-number
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
    
}
