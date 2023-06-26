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

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexResponse;

/**
 * Class FindComplexResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindComplexResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindComplexResponse();

        $this->assertInstanceOf(FindComplexResponse::class, $instance);

    }

    public function testItCanSetAndGet(): void
    {
        $instance = new FindComplexResponse();

        $this->assertInstanceOf(ArrayCollection::class, $instance->getComplexes());
    }
}
