<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentContent.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentContent
{
    use ToArray;

    private int $parcelsCount;

    private float $totalWeight;

    private string $contents;

    private string $package;

    private ?ShipmentParcel $parcel = null;

    private bool $palletized = false;

    private bool $documents = false;

    private bool $pendingParcels = false;

    private bool $exciseGoods = false;

    public function __construct(
        int $parcelsCount,
        float $totalWeight,
        string $contents,
        string $package,
        ?ShipmentParcel $parcel
    ) {
        $this->setParcelsCount($parcelsCount);
        $this->setTotalWeight($totalWeight);
        $this->setContents($contents);
        $this->setPackage($package);
        $this->setParcel($parcel);
    }

    public function getParcelsCount(): int
    {
        return $this->parcelsCount;
    }

    public function setParcelsCount(int $parcelsCount): void
    {
        $this->parcelsCount = $parcelsCount;
    }

    public function getTotalWeight(): float
    {
        return $this->totalWeight;
    }

    public function setTotalWeight(float $totalWeight): void
    {
        $this->totalWeight = $totalWeight;
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

    public function setParcel(?ShipmentParcel $parcel): void
    {
        $this->parcel = $parcel;
    }

    public function getParcel(): ShipmentParcel
    {
        return $this->parcel;
    }

    public function isDocuments(): bool
    {
        return $this->documents;
    }

    public function setDocuments(): self
    {
        $this->documents = true;

        return $this;
    }

    public function isPalletized(): bool
    {
        return $this->palletized;
    }

    public function setPalletized(): self
    {
        $this->palletized = true;

        return $this;
    }

    public function isPendingParcels(): bool
    {
        return $this->pendingParcels;
    }

    public function setPendingParcels(): self
    {
        $this->pendingParcels = true;

        return $this;
    }

    public function isExciseGoods(): bool
    {
        return $this->exciseGoods;
    }

    public function setExciseGoods(): self
    {
        $this->exciseGoods = true;

        return $this;
    }
}
