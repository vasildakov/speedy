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

namespace VasilDakov\SpeedyTest\Service\Location\Complex;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;

/**
 * Class FindComplexRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindComplexRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindComplexRequest(1000, 'name');

        $this->assertInstanceOf(FindComplexRequest::class, $instance);
    }

    public function testItCanSetAndGet(): void
    {
        $instance = new FindComplexRequest(1000, 'name');

        $this->assertEquals(1000, $instance->getSiteId());
        $this->assertEquals('name', $instance->getName());
    }
}
