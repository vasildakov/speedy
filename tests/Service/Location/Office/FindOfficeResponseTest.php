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

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeResponse;

/**
 * Class FindOfficeResponseTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class FindOfficeResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindOfficeResponse();

        $this->assertInstanceOf(FindOfficeResponse::class, $instance);

        $this->assertInstanceOf(ArrayCollection::class, $instance->getOffices());
    }
}
