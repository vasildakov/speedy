<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;

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
     * @test CalculationAddressLocation
     * return void
     */
    public function testItCanBeCreated(): void
    {
        $object = new CalculationAddressLocation($this->stateId, $this->siteId, $this->postCode);
        $this->assertOfInstance(CalculationAddressLocation::class, $object);
        
    }
}