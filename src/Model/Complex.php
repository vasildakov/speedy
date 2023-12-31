<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

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

    /**
     * @Serializer\Type("int")
     */
    private int $actualId;

    /**
     * @Serializer\Type("string")
     */
    private string $actualType;

    /**
     * @Serializer\Type("string")
     */
    private string $actualTypeEn;

    /**
     * @Serializer\Type("string")
     */
    private string $actualName;

    /**
     * @Serializer\Type("string")
     */
    private string $actualNameEn;

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

    public function getActualId(): int
    {
        return $this->actualId;
    }

    public function setActualId(int $actualId): void
    {
        $this->actualId = $actualId;
    }

    public function getActualType(): string
    {
        return $this->actualType;
    }

    public function setActualType(string $actualType): void
    {
        $this->actualType = $actualType;
    }

    public function getActualTypeEn(): string
    {
        return $this->actualTypeEn;
    }

    public function setActualTypeEn(string $actualTypeEn): void
    {
        $this->actualTypeEn = $actualTypeEn;
    }

    public function getActualName(): string
    {
        return $this->actualName;
    }

    public function setActualName(string $actualName): void
    {
        $this->actualName = $actualName;
    }

    public function getActualNameEn(): string
    {
        return $this->actualNameEn;
    }

    public function setActualNameEn(string $actualNameEn): void
    {
        $this->actualNameEn = $actualNameEn;
    }

    public function toArray(): array
    {
        return [
        ];
    }
}
