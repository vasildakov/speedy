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

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Calculation\CalculationResponse;

/**
 * Class CalculationResponseTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
final class CalculationResponseTest extends TestCase
{
    public function testConstructor(): void
    {
        $this->assertInstanceOf(CalculationResponse::class, new CalculationResponse());
    }

    public function testAccessors(): void
    {
        $instance = new CalculationResponse();

        $instance->setCalculations(new ArrayCollection());

        $this->assertInstanceOf(ArrayCollection::class, $instance->getCalculations());

        $this->assertNull($instance->getError());
    }
}
