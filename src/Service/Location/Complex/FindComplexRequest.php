<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Complex;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindComplexRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindComplexRequest
{
    use ToArray;

    private int $siteId;

    private string $name;

    public function __construct(int $siteId, string $name)
    {
        $this->setSiteId($siteId);
        $this->setName($name);
    }

    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
