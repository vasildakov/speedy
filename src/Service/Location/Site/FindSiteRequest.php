<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Site;

use VasilDakov\Speedy\ToArray;

/**
 * Class FindSiteRequest
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @author    Valentin Valkanov <email@email.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version   1.0
 * @see       https://services.speedy.bg/api/api_examples.html#FindSiteRequest
 */
class FindSiteRequest
{
    use ToArray;

    /**
     * @var int
     */
    private int $countryId;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var string|null
     */
    private ?string $postCode = null;

    /**
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @var string|null
     */
    private ?string $municipality = null;


    public function __construct(int $countryId, string $name)
    {
        $this->setCountryId($countryId);
        $this->setName($name);
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId(int $countryId): void
    {
        $this->countryId = $countryId;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * @param string|null $postCode
     */
    public function setPostCode(?string $postCode): void
    {
        $this->postCode = $postCode;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    /**
     * @param string|null $municipality
     */
    public function setMunicipality(?string $municipality): void
    {
        $this->municipality = $municipality;
    }
}
