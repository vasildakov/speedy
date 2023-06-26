<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\CountryCode;

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
     * return void
     */
    public function testItCanBeCreatedWithBulgariaCode(): void
    {
        $object = new CountryCode(CountryCode::BGR);
        $this->assertInstanceOf(CountryCode::class, $object);
    }

    /**
     * @group countryCode
     * return void
     */
    public function testItCanBeCreatedWithRomaniaCode(): void
    {
        $this->assertInstanceOf(CountryCode::class, new CountryCode(CountryCode::ROU));
    }

    /**
     * @group countryCode
     * @return void
     */
    public function testItContainsValidCountryCodes(): void
    {
        $this->assertContains(100, CountryCode::CODES);
        $this->assertContains(642, CountryCode::CODES);
    }

    /**
     * @group countryCode
     */
    public function testSetCodeThrowsAnException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $object = new CountryCode(3000);
    }

    /**
     * @group countryCode
     */
    public function testObjectsAreEqual()
    {
        $object = new CountryCode(100); // first object
        $other  = new CountryCode(100); // second object is the same

        $this->assertTrue($object->equals($other));
    }

    /**
     * @group countryCode
     */
    public function testObjectsAreNotEqual()
    {
        $object = new CountryCode(100); // first object
        $other  = new CountryCode(642); // second object is different

        $this->assertFalse($object->equals($other));
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new CountryCode(100))->toArray());
    }
}
