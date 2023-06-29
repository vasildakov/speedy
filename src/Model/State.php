<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class State
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class State
{
    use ToArray;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $id = null;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $nameEn;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $stateAlpha;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private int $countryId;

    /**
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param ?int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
     * @return string
     */
    public function getStateAlpha(): string
    {
        return $this->stateAlpha;
    }

    /**
     * @param string $stateAlpha
     */
    public function setStateAlpha(string $stateAlpha): void
    {
        $this->stateAlpha = $stateAlpha;
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
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}
