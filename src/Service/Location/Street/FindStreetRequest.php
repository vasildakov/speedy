<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Street;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindStreetRequest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindStreetRequest
{
    use ToArray;

    private int $siteId;

    private string $name;

    private ?string $type = null;

    public function __construct($siteId, $name, $type = null)
    {
        $this->siteId = $siteId;
        $this->name = $name;
        $this->type = $type;
    }
}
