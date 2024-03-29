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
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;

/**
 * Class CalculationRequestTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
final class CalculationRequestTest extends TestCase
{
    public function testConstructor()
    {
        $instance = new CalculationRequest();

        $this->assertInstanceOf(CalculationRequest::class, $instance);
    }
}
