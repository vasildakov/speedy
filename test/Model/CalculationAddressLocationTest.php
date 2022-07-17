<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\CalculationAddressLocation;

/**
 * Class CalculationAddressLocationTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationAddressLocationTest extends TestCase
{
    protected function setUp():void
    {
        parent::setUp();
        
    }
    
    /**
     * @group CalculationAddressLocation
     * return void
     */
    public function testItCanBeCreated(): void
    {
        $object = new CalculationAddressLocation(CalculationAddressLocation::stateId, CalculationAddressLocation:: siteId, CalculationAddressLocation:: postCode);
        $this->assertOfInstance(CalculationAddressLocation::class, $object);
        
    }
    
    /**
     * 
     * @return void
     */
    public function testItCanRetrieveStateId() :void
    {
        $object = new CalculationAddressLocation(CalculationAddressLocation::stateId, CalculationAddressLocation:: siteId, CalculationAddressLocation:: postCode); 
        $this->assertEquals($this->stateId, $object->getStateId());
    }
}