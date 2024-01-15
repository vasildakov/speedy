<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Property;

/**
 * Class Complex.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 */
class Complex
{
    /**
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\Type("int")
     */
    private int $siteId;

    /**
     * @Serializer\Type("string")
     */
    private string $type;

    /**
     *  @Serializer\Type("string")
     */
    private string $typeEn;

    /**
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\Type("string")
     */
    private string $nameEn;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSiteId(): int
    {
        return $this->siteId;
    }

    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getTypeEn(): string
    {
        return $this->typeEn;
    }

    public function setTypeEn(string $typeEn): void
    {
        $this->typeEn = $typeEn;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    public function setNameEn(string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            Property::ID->value       => $this->id,
            Property::SITE_ID->value  => $this->siteId,
            Property::TYPE->value     => $this->type,
            Property::TYPE_EN->value  => $this->typeEn,
            Property::NAME->value     => $this->name,
            Property::NAME_EN->value  => $this->nameEn,
        ];
    }
}
