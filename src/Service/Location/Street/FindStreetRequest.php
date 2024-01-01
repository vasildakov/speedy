<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Street;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class FindStreetRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class FindStreetRequest
{
    use ToArray;

    private int $siteId;

    private string $name;

    private ?string $type = null;

    public function __construct(int $siteId, string $name, ?string $type)
    {
        $this->siteId = $siteId;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
}
