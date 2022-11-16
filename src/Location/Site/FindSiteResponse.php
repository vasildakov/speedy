<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Location\Site;
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

    private ?Site $site = null;

    private ?Error $error =null;

    public function __construct(?Site $site, ?Error $error)
    {
        $this->setSite($site);
        $this->setError($error);
    }

    /**
     * @return Site|null
     */
    public function getSite(): ?Site
    {
        return $this->site;
    }

    /**
     * @param Site|null $site
     */
    public function setSite(?Site $site): void
    {
        $this->site = $site;
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

