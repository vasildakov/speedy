<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;
use JMS\Serializer\Annotation as Serializer;
/**
 * Class Content
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Content
{

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $parcelsCount;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $declaredWeight;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $measuredWeight;

    /**
     * @var float
     * @Serializer\Type("float")
     */
    private float $calculationWeight;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $contents;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $package;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $documents;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $palletized;

    /**
     * @var Parcel
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\Parcel>")
     */
    private Parcel $parcels;

    /**
     * @var bool
     */
    private bool $pendingParcels;

    /**
     * @return int
     */
    public function getParcelsCount(): int
    {
        return $this->parcelsCount;
    }

    /**
     * @param int $parcelsCount
     */
    public function setParcelsCount(int $parcelsCount): void
    {
        $this->parcelsCount = $parcelsCount;
    }

    /**
     * @return float
     */
    public function getDeclaredWeight(): float
    {
        return $this->declaredWeight;
    }

    /**
     * @param float $declaredWeight
     */
    public function setDeclaredWeight(float $declaredWeight): void
    {
        $this->declaredWeight = $declaredWeight;
    }

    /**
     * @return float
     */
    public function getMeasuredWeight(): float
    {
        return $this->measuredWeight;
    }

    /**
     * @param float $measuredWeight
     */
    public function setMeasuredWeight(float $measuredWeight): void
    {
        $this->measuredWeight = $measuredWeight;
    }

    /**
     * @return float
     */
    public function getCalculationWeight(): float
    {
        return $this->calculationWeight;
    }

    /**
     * @param float $calculationWeight
     */
    public function setCalculationWeight(float $calculationWeight): void
    {
        $this->calculationWeight = $calculationWeight;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }

    /**
     * @param string $contents
     */
    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }

    /**
     * @return string
     */
    public function getPackage(): string
    {
        return $this->package;
    }

    /**
     * @param string $package
     */
    public function setPackage(string $package): void
    {
        $this->package = $package;
    }

    /**
     * @return bool
     */
    public function isDocuments(): bool
    {
        return $this->documents;
    }

    /**
     * @param bool $documents
     */
    public function setDocuments(bool $documents): void
    {
        $this->documents = $documents;
    }

    /**
     * @return bool
     */
    public function isPalletized(): bool
    {
        return $this->palletized;
    }

    /**
     * @param bool $palletized
     */
    public function setPalletized(bool $palletized): void
    {
        $this->palletized = $palletized;
    }

    /**
     * @return Parcel
     */
    public function getParcels(): Parcel
    {
        return $this->parcels;
    }

    /**
     * @param Parcel $parcels
     */
    public function setParcels(Parcel $parcels): void
    {
        $this->parcels = $parcels;
    }

    /**
     * @return bool
     */
    public function isPendingParcels(): bool
    {
        return $this->pendingParcels;
    }

    /**
     * @param bool $pendingParcels
     */
    public function setPendingParcels(bool $pendingParcels): void
    {
        $this->pendingParcels = $pendingParcels;
    }



}