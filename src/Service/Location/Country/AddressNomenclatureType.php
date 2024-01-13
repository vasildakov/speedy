<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\Country;

/**
 * Class AddressNomenclatureType.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class AddressNomenclatureType
{
    private ?string $name = null;

    private ?string $nameEn = null;

    public function setName(?string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setNameEn(?string $nameEn)
    {
        $this->nameEn = $nameEn;
    }

    public function getNameEn(): ?string
    {
        return $this->nameEn;
    }
}
