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

namespace VasilDakov\SpeedyTests\Service\Calculation;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Calculation\CalculationAddressLocation;
use VasilDakov\Speedy\Service\Calculation\CalculationRecipient;

/**
 * Class CalculationRecipientTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationRecipientTest extends TestCase
{
    public function testConstructorToOffice(): void
    {
        $instance = new CalculationRecipient(
            true,
            77,
            null
        );

        $this->assertInstanceOf(CalculationRecipient::class, $instance);
    }

    public function testConstructorToAddress(): void
    {
        $instance = new CalculationRecipient(
            true,
            null,
            $this->createMock(CalculationAddressLocation::class)
        );

        $this->assertInstanceOf(CalculationRecipient::class, $instance);
    }

    public function testAccessors(): void
    {
        $instance = new CalculationRecipient(
            true,
            null,
            $this->createMock(CalculationAddressLocation::class)
        );

        $instance->setSiteId(41);
        $instance->setPickupOfficeId(null);

        $this->assertTrue($instance->isPrivatePerson());
        $this->assertNull($instance->getPickupOfficeId());
        $this->assertEquals(41, $instance->getSiteId());
        $this->assertInstanceOf(CalculationAddressLocation::class, $instance->getAddressLocation());
    }
}
