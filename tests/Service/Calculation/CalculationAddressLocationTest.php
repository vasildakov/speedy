<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Calculation;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\CountryCode;
use VasilDakov\Speedy\Service\Calculation\CalculationAddressLocation;

/**
 * Class CalculationAddressLocationTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationAddressLocationTest extends TestCase
{
    protected int $siteId;

    protected string $stateId;

    protected string $postCode;

    protected string $siteType;

    protected string $siteName;

    protected CountryCode|MockObject $countryId;

    protected function setUp(): void
    {
        $this->siteId = 100;
        $this->stateId = 'StateId';
        $this->siteType = 'SiteType';
        $this->siteName = 'SiteName';
        $this->postCode = '1000';
        $this->countryId = $this->createMock(CountryCode::class);

        parent::setUp();
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanBeCreated(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $this->assertInstanceOf(CalculationAddressLocation::class, $object);
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveCountryId(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $object->setCountryId($this->countryId);

        $this->assertEquals($this->countryId, $object->getCountryId());
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveTheStateId(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $object->setStateId($this->stateId);

        $this->assertEquals($this->stateId, $object->getStateId());
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveTheSiteId(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $this->assertEquals($this->siteId, $object->getSiteId());
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveThePostCode(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $this->assertEquals($this->postCode, $object->getPostCode());
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveTheSiteType(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $object->setSiteType($this->siteType);

        $this->assertEquals($this->siteType, $object->getSiteType());
    }

    /**
     * @group CalculationAddressLocation
     */
    public function testItCanRetrieveTheSiteName(): void
    {
        $object = new CalculationAddressLocation($this->siteId, $this->postCode);

        $object->setSiteName($this->siteName);

        $this->assertEquals($this->siteName, $object->getSiteName());
    }
}
