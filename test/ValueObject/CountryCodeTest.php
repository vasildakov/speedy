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
    /*
     * var int
     */
    private $code;
    
    protected function setUp() :void
    {
        $this->code = new CountryCode(100);
    }
    
}