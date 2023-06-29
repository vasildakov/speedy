<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Complex;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindComplexRequest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindComplexRequest
{
    use ToArray;

    /**
     * @var int
     */
    private int $siteId;

    /**
     * @var string
     */
    private string $name;

    public function __construct(int $siteId, string $name)
    {
        $this->setSiteId($siteId);
        $this->setName($name);
    }

    /**
     * @param int $siteId
     */
    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
