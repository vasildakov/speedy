<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Printing;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Client.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class PrintRequest
{
    use ToArray;

    public function __construct(public string $paperSize, public array $parcels)
    {
    }
}
