<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class ShipmentContent
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentContent
{
    /**
     * @var int
     */
    private int $parcelsCount;

    /**
     * @var float
     */
    private float $totalWeight;

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
    private bool $palletized;

    /**
     * @var ShipmentParcel
     */
    private ShipmentParcel $parcel;

    /**
     * @var bool
     */
    private bool $documents;

    /**
     * @var bool
     */
    private bool $pendingParcels;

    /**
     * @var bool
     */
    private bool $exciseGoods;

    public function __construct(int $parcelsCount, float $totalWeight, string $contents, string $package, ShipmentParcel $parcel)
    {
        $this->setParcelsCount($parcelsCount);
        $this->setTotalWeight($totalWeight);
        $this->setContents($contents);
        $this->setPackage($package);
        $this->setParcel($parcel);

    }

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
    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }

    /**
     * @param float $totalWeight
     */
    public function setTotalWeight(float $totalWeight): void
    {
        $this->totalWeight = $totalWeight;
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
     * @return ShipmentParcel
     */
    public function getParcel(): ShipmentParcel
    {
        return $this->parcel;
    }

    /**
     * @param ShipmentParcel $parcel
     */
    public function setParcel(ShipmentParcel $parcel): void
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

    /**
     * @return bool
     */
    public function isExciseGoods(): bool
    {
        return $this->exciseGoods;
    }

    /**
     * @param bool $exciseGoods
     */
    public function setExciseGoods(bool $exciseGoods): void
    {
        $this->exciseGoods = $exciseGoods;
    }



}