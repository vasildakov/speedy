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

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CalculationPayment.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationPayment
{
    use ToArray;

    private string $courierServicePayer;

    public function __construct(string $courierServicePayer)
    {
        $this->courierServicePayer = $courierServicePayer;
    }
}
