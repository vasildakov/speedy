<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Site;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;

/**
 * Class FindSiteResponse.
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @author    Valentin Valkanov <email@email.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version   1.0
 *
 * @see       https://api.speedy.bg/web-api.html#href-find-site-resp
 *
 * @Serializer\AccessType("public_method")
 */
class FindSiteResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Site>")
     */
    private ArrayCollection $sites;

    private ?Error $error = null;

    public function __construct(Error $error = null)
    {
        $this->sites = new ArrayCollection();
        $this->error = $error;
    }

    public function setSites(ArrayCollection $sites): void
    {
        $this->sites = $sites;
    }

    public function getSites(): ArrayCollection
    {
        return $this->sites;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }

    public function setError(?Error $error): void
    {
        $this->error = $error;
    }

    public function toArray(): array
    {
        return [
            'sites' => $this->getSites(),
            'error' => $this->getError(),
        ];
    }
}
