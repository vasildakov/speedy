<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Service\Location\Site;

use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Model\Site;


/**
 * Class FindSiteResponse
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @author    Valentin Valkanov <email@email.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version   1.0
 * @see       https://api.speedy.bg/web-api.html#href-find-site-resp
 */
class FindSiteResponse
{

    private Collection $sites;


    private ?Error $error = null;


    public function __construct(Error $error = null)
    {
        $this->sites = new Collection();
        $this->error = $error;
    }

    public function addSite($site) 
    {
        $this->sites->addItem($site->getId(), $site);
    }

    public function getSite($id) 
    {
        return $this->sites->getItem($id);
    }

    /**
     * @return Collection
     */
    public function getSites(): Collection
    {
        return $this->sites;
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
            'sites' => $this->getSites(),
            'error' => $this->getError()
        ];
    }
}
