<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Model;

use VasilDakov\Speedy\ValueObject\CountryCode;
use VasilDakov\Speedy\Model\CalculationAddressLocation;

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
    protected $siteId;

    protected $postCode;

    protected $countryId;

    protected function setUp():void
    {
        $this->siteId   = 100; // Note: some random integer value for now

        $this->postCode = '1000'; // Note: some random string value for now

        // Note: the countryId is an instance of CountryCode, so it has to be mocked
        $this->countryId = $this->createMock(CountryCode::class);

        parent::setUp();
    }
    
    /**
     * @group CalculationAddressLocation
     */
    public function testItCanBeCreated(): void
    {

        // Note: The testing variables $stateId, $siteId, etc., were not initialized in the constructor
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        // Note: $this->assertOfInstance() must be $this->assertInstanceOf()
        // Wrong: $this->assertOfInstance(CalculationAddressLocation::class, $object);

        $this->assertInstanceOf(CalculationAddressLocation::class, $object);
    }
    
    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveCountryId() :void
    {
        // Note: The testing variables $stateId, $siteId, etc., were not initialized in the constructor
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        // Note: once you have the object created above, just use the setter
        $object->setCountryId($this->countryId);

        // Note: the variable returned by the getter must be the same as the one used with the setter
        $this->assertEquals($this->countryId, $object->getCountryId());
    }


    /**
     * Note: we are testing the stateId accessors here
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveTheStateId()
    {
        // Note: since the stateId is passed as constructor argument, we don't use the setter here
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $this->assertEquals($this->siteId, $object->getSiteId());
    }


    /**
     * Note: we are testing the postCode accessors here
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveThePostCode()
    {
        // Note: since the postCode is passed as constructor argument, we don't use the setter here
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $this->assertEquals($this->postCode, $object->getPostCode());
    }
}