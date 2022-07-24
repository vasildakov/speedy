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
     * @var ShipmentParcel
     */
    private ShipmentParcel $parcel;

    /**
     * @var bool
     */
    private bool $palletized;

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
     * @param ShipmentParcel $parcel
     */
    public function setParcel(ShipmentParcel $parcel): void
    {
        $this->parcel = $parcel;
    }

    /**
     * @return ShipmentParcel
     */
    public function getParcel(): ShipmentParcel
    {
        return $this->parcel;
    }

    /**
     * @return bool
     */
    public function isDocuments(): bool
    {
        return $this->documents;
    }

    /**
     * @return self
     */
    public function setDocuments(): self
    {
        $this->documents = True;
        return $this;
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
     * @return self
     */
    public function setPalletized(bool $palletized): self
    {
        $this->palletized = True;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPendingParcels(): bool
    {
        return $this->pendingParcels;
    }

    /**
     * @return self
     */
    public function setPendingParcels(): self
    {
        $this->pendingParcels = True;

        return $this;
    }

    /**
     * @return bool
     */
    public function isExciseGoods(): bool
    {
        return $this->exciseGoods;
    }

    /**
     * @return self
     */
    public function setExciseGoods(): self
    {
        $this->exciseGoods = True;

        return $this;
    }

}