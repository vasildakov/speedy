<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Street.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 *
 * @psalm-suppress MissingConstructor
 *
 * @Serializer\AccessType("public_method")
 */
class Street
{
    use ToArray;

    /**
     * @Serializer\Type("integer")
     */
    private int $id;

    /**
     * @Serializer\Type("integer")
     */
    private int $siteId;

    /**
     * @Serializer\Type("string")
     */
    private string $type;

    /**
     * @Serializer\Type("string")
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
}
