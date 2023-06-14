<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;
use JMS\Serializer\Annotation as Serializer;
/**
 * Class Complex
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Complex
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $siteId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $type;

    /**
     * @var string
     *  @Serializer\Type("string")
     */
    private string $typeEn;

    /**
     * @var string
     * @Serializer\Type("string")
     *
     */
    private string $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $nameEn;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $actualId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $actualType;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $actualTypeEn;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $actualName;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string  $actualNameEn;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     */
    public function setSiteId(int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTypeEn(): string
    {
        return $this->typeEn;
    }

    /**
     * @param string $typeEn
     */
    public function setTypeEn(string $typeEn): void
    {
        $this->typeEn = $typeEn;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameEn(): string
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     */
    public function setNameEn(string $nameEn): void
    {
        $this->nameEn = $nameEn;
    }

    /**
     * @return int
     */
    public function getActualId(): int
    {
        return $this->actualId;
    }

    /**
     * @param int $actualId
     */
    public function setActualId(int $actualId): void
    {
        $this->actualId = $actualId;
    }

    /**
     * @return string
     */
    public function getActualType(): string
    {
        return $this->actualType;
    }

    /**
     * @param string $actualType
     */
    public function setActualType(string $actualType): void
    {
        $this->actualType = $actualType;
    }

    /**
     * @return string
     */
    public function getActualTypeEn(): string
    {
        return $this->actualTypeEn;
    }

    /**
     * @param string $actualTypeEn
     */
    public function setActualTypeEn(string $actualTypeEn): void
    {
        $this->actualTypeEn = $actualTypeEn;
    }

    /**
     * @return string
     */
    public function getActualName(): string
    {
        return $this->actualName;
    }

    /**
     * @param string $actualName
     */
    public function setActualName(string $actualName): void
    {
        $this->actualName = $actualName;
    }

    /**
     * @return string
     */
    public function getActualNameEn(): string
    {
        return $this->actualNameEn;
    }

    /**
     * @param string $actualNameEn
     */
    public function setActualNameEn(string $actualNameEn): void
    {
        $this->actualNameEn = $actualNameEn;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}