<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Location\Office;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;

/**
 * Class FindOfficeRequestTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class FindOfficeRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindOfficeRequest(countryId: 100);

        $this->assertInstanceOf(FindOfficeRequest::class, $instance);
    }
}
