<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\ShipmentPhoneNumber;

/**
 * Class ShipmentPhoneNumberTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ShipmentPhoneNumberTest extends TestCase 
{
    protected $number;
    
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
