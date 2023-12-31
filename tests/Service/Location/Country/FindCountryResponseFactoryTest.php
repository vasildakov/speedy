<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Location\Country;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponseFactory;

/**
 * Class FindCountryResponseFactoryTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindCountryResponseFactoryTest extends TestCase
{
    public function testItThrowsAnExceptionForInvalidJson()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid or malformed JSON');

        (new FindCountryResponseFactory())('{invalid json or malformed json}');
    }
}
