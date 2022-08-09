<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class ShipmentParcel
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentParcel
{
    /**
     * @var string|null
     */
    private ?string $id =null;

    /**
     * @var int
     */
    private int $seqNo;

    /**
     * @var int|null
     */
    private ?int $packageUniqueNumber = null;

    /**
     * @var ShipmentParcelSize
     */
    private ShipmentParcelSize $size;

    /**
     * @var float|null
     */
    private ?float $weight = null;

    /**
     * @var string
     */
    private string $externalCarrierParcelNumber;

    /**
     * @var string|null
     */
    private ?string $ref1 = null;

    /**
     * @var string|null
     */
    private ?string $ref2 = null;

    /**
     * @param int $seqNo
     * @param ShipmentParcelSize $size
     */
    public function __construct(int $seqNo, ShipmentParcelSize $size)
    {
        $this->setSeqNo($seqNo);
        $this->setSize($size);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ShipmentParcel
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeqNo(): int
    {
        return $this->seqNo;
    }

    /**
     * @param int $seqNo
     */
    public function setSeqNo(int $seqNo): void
    {
        $this->seqNo = $seqNo;
    }

    /**
     * @return int
     */
    public function getPackageUniqueNumber(): int
    {
        return $this->packageUniqueNumber;
    }

    /**
     * @param int $packageUniqueNumber
     * @return ShipmentParcel
     */
    public function setPackageUniqueNumber(int $packageUniqueNumber): self
    {
        $this->packageUniqueNumber = $packageUniqueNumber;

        return $this;
    }

    /**
     * @return ShipmentParcelSize
     */
    public function getSize(): ShipmentParcelSize
    {
        return $this->size;
    }

    /**
     * @param ShipmentParcelSize $size
     */
    public function setSize(ShipmentParcelSize $size): void
    {
        $this->size = $size;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return ShipmentParcel
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalCarrierParcelNumber(): string
    {
        return $this->externalCarrierParcelNumber;
    }

    /**
     * @param string $externalCarrierParcelNumber
     * @return ShipmentParcel
     */
    public function setExternalCarrierParcelNumber(string $externalCarrierParcelNumber): self
    {
        $this->externalCarrierParcelNumber = $externalCarrierParcelNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getRef1(): string
    {
        return $this->ref1;
    }

    /**
     * @param string $ref1
     * @return ShipmentParcel
     */
    public function setRef1(string $ref1): self
    {
        $this->ref1 = $ref1;

        return $this;
    }

    /**
     * @return string
     */
    public function getRef2(): string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return ShipmentParcel
     */
    public function setRef2(string $ref2): self
    {
        $this->ref2 = $ref2;

        return $this;
    }



    /**
     * @return array
     */
    public function toArray(): array
    {
        return [];
    }
}