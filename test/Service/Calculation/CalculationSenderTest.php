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

namespace VasilDakov\SpeedyTest\Service\Calculation;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Calculation\CalculationSender;

/**
 * Class CalculationSenderTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class CalculationSenderTest extends TestCase
{
    public function testConstructor(): void
    {
        $instance = new CalculationSender(1234, 77);

        $this->assertInstanceOf(CalculationSender::class, $instance);
    }

    public function testAccessors(): void
    {
        $instance = new CalculationSender(1234, 77);

        $this->assertEquals(1234, $instance->getClientId());
        $this->assertEquals(77, $instance->getDropoffOfficeId());
    }
}
