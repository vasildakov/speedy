<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Office;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindOfficeRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindOfficeRequest
{
    use ToArray;

    private int $siteId;

    public function __construct(int $siteId)
    {
        $this->siteId = $siteId;
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }
}
