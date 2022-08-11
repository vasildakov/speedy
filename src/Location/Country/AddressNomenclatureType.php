<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Location\Country;

/**
 * Class AddressNomenclatureType
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class AddressNomenclatureType
{
    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var string|null
     */
    private ?string $nameEn = null;

    /**
     * @param string|null $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $nameEn
     */
    public function setNameEn(?string $nameEn)
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return string|null
     */
    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }
}
