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

namespace VasilDakov\SpeedyTest\Service\Location\Site;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;

/**
 * Class FindSiteRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindSiteRequestTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $instance = new FindSiteRequest(100, 'B');

        $this->assertInstanceOf(FindSiteRequest::class, $instance);
    }

    public function testItCanBeConstructedWithOptionalArguments()
    {
        $instance = new FindSiteRequest(100, 'B');
        $instance->setPostCode('1000');
        $instance->setMunicipality('Municipality');
        $instance->setType('Type');

        $this->assertEquals(100, $instance->getCountryId());
        $this->assertEquals('B', $instance->getName());
        $this->assertEquals('1000', $instance->getPostCode());
        $this->assertEquals('Municipality', $instance->getMunicipality());
        $this->assertEquals('Type', $instance->getType());

        $this->assertInstanceOf(FindSiteRequest::class, $instance);
    }
}