<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CalculationContent
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationContent
{
    use ToArray;

    public function __construct(
        public int $parcelsCount,
        public float $totalWeight,
        public bool $documents,
        public bool $palletized,
    ) {
    }
}
