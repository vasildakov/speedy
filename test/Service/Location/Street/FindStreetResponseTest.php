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

namespace VasilDakov\SpeedyTest\Service\Location\Street;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Street\FindStreetResponse;

/**
 * Class FindStreetResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindStreetResponseTest extends TestCase
{
    public function testConstructor(): void
    {
        $instance = new FindStreetResponse();

        $this->assertInstanceOf(FindStreetResponse::class, $instance);
    }

    public function testAccessors(): void
    {
        $instance = new FindStreetResponse();

        $instance->setStreets(new ArrayCollection());

        $this->assertInstanceOf(ArrayCollection::class, $instance->getStreets());
    }
}
