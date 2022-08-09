<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Location\Country;

/**
 * Class Country
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Country
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $isoAlpha2;

    /**
     * @var string
     */
    private string $isoAlpha3;

    /**
     * @var array
     */
    private array $postCodeFormats;

    /**
     * @var string
     */
    private string $requireState;

    /**
     * @var int
     */
    private int $addressType;

    /**
     * @var string
     */
    private string $currencyCode;

    /**
     * @var int
     */
    private int $defaultOfficeId;

    /**
     * @var AddressNomenclatureType
     */
    private AddressNomenclatureType $streetTypes;

    /**
     * @var AddressNomenclatureType
     */
    private AddressNomenclatureType $complexTypes;

    /**
     * @var int
     */
    private int $siteNomen;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}