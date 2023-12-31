<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Content.
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
class Content
{
    /**
     * @Serializer\Type("int")
     */
    private int $parcelsCount;

    /**
     * @Serializer\Type("float")
     */
    private float $declaredWeight;

    /**
     * @Serializer\Type("float")
     */
    private float $measuredWeight;

    /**
     * @Serializer\Type("float")
     */
    private float $calculationWeight;

    /**
     * @Serializer\Type("string")
     */
    private string $contents;

    /**
     * @Serializer\Type("string")
     */
    private string $package;

    /**
     * @Serializer\Type("bool")
     */
    private bool $documents;

    /**
     * @Serializer\Type("bool")
     */
    private bool $palletized;

    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Parcel>")
     */
    private ArrayCollection $parcels;

    /**
     * @Serializer\Type("bool")
     */
    private bool $pendingParcels;

    public function getParcelsCount(): int
    {
        return $this->parcelsCount;
    }

    public function setParcelsCount(int $parcelsCount): void
    {
        $this->parcelsCount = $parcelsCount;
    }

    public function getDeclaredWeight(): float
    {
        return $this->declaredWeight;
    }

    public function setDeclaredWeight(float $declaredWeight): void
    {
        $this->declaredWeight = $declaredWeight;
    }

    public function getMeasuredWeight(): float
    {
        return $this->measuredWeight;
    }

    public function setMeasuredWeight(float $measuredWeight): void
    {
        $this->measuredWeight = $measuredWeight;
    }

    public function getCalculationWeight(): float
    {
        return $this->calculationWeight;
    }

    public function setCalculationWeight(float $calculationWeight): void
    {
        $this->calculationWeight = $calculationWeight;
    }

    public function getContents(): string
    {
        return $this->contents;
    }

    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }

    public function getPackage(): string
    {
        return $this->package;
    }

    public function setPackage(string $package): void
    {
        $this->package = $package;
    }

    public function isDocuments(): bool
    {
        return $this->documents;
    }

    public function setDocuments(bool $documents): void
    {
        $this->documents = $documents;
    }

    public function isPalletized(): bool
    {
        return $this->palletized;
    }

    public function setPalletized(bool $palletized): void
    {
        $this->palletized = $palletized;
    }

    public function getParcels(): ArrayCollection
    {
        return $this->parcels;
    }

    public function setParcels(ArrayCollection $parcels): void
    {
        $this->parcels = $parcels;
    }

    public function isPendingParcels(): bool
    {
        return $this->pendingParcels;
    }

    public function setPendingParcels(bool $pendingParcels): void
    {
        $this->pendingParcels = $pendingParcels;
    }

    public function toArray(): array
    {
        return [];
    }
}
