<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\ValueObject;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\ValueObject\CountryCode;


/**
 * Class CountryCodeTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CountryCodeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @group countryCode
     */
    public function testItCanBeCreatedWithBulgariaCode():void
    {
        $object = new CountryCode(CountryCode::BGR);
        $this->assertInstanceOf(CountryCode::class, $object);
    }

    /**
     * @group countryCode
     */
    public function testItCanBeCreatedWithRomaniaCode():void
    {
        $this->assertInstanceOf(CountryCode::class, new CountryCode(CountryCode::ROU));
    }
    
    public function testCodeIsInvalid():void
    {
        $this->assertContains(setCode(), self::CODES );
    }
}