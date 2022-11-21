<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Location\Site;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Model\Site;

/**
 * Class FindSiteResponse
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindSiteResponse
{
    /**
     * @var Collection|null
     */
    private ?Collection $sites = null;

    /**
     * @var Error|null
     */
    private ?Error $error = null;

    /**
     * @param Collection $sites
     * @param Error $error
     */
    public function __construct(Collection $sites, Error $error)
    {
        $this->sites = new Collection();
        $this->error = $error;
    }

    /**
     * @return Collection|null
     */
    public function getSites(): ?Collection
    {
        return $this->sites;
    }

    /**
     * @param Collection|null $sites
     */
    public function setSites(?Collection $sites): void
    {
        $this->sites = $sites;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @param Error|null $error
     */
    public function setError(?Error $error): void
    {
        $this->error = $error;
    }

    public function toArray(): array
    {
        return [

        ];
    }

}

