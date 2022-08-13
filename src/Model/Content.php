<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;

/**
 * Class Content
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Content
{

    /**
     * @var int
     */
    private int $parcelsCount;

    /**
     * @var float
     */
    private float $declaredWeight;

    /**
     * @var float
     */
    private float $measuredWeight;

    /**
     * @var float
     */
    private float $calculationWeight;

    /**
     * @var string
     */
    private string $contents;

    /**
     * @var string
     */
    private string $package;

    /**
     * @var bool
     */
    private bool $documents;

    /**
     * @var Parcel
     */
    private Parcel $parcel;

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
     * @return Parcel
     */
    public function getParcel(): Parcel
    {
        return $this->parcel;
    }

    /**
     * @param Parcel $parcel
     */
    public function setParcel(Parcel $parcel): void
    {
        $this->parcel = $parcel;
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