<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Shipment\ShipmentParcelSize;

/**
 * Class Parcel
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Parcel
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var int
     */
    private int $seqNo;

    /**
     * @var int
     */
    private int $packageUniqueNumber;

    /**
     * @var ShipmentParcelSize
     * @TODO! The class is in Shipment directory!!!
     */
    private ShipmentParcelSize $declaredSize;

    /**
     * @var ShipmentParcelSize
     */
    private ShipmentParcelSize $measuredSize;

    /**
     * @var ShipmentParcelSize
     */
    private ShipmentParcelSize $calculationSize;

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
     * @var array
     * In documentation the data type is described as "String[]"
     */
    private array $externalCarrierParcelNumbers;

    /**
     * @var string
     */
    private string $baseType;

    /**
     * @var string
     */
    private string $size;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     */
    public function setPackageUniqueNumber(int $packageUniqueNumber): void
    {
        $this->packageUniqueNumber = $packageUniqueNumber;
    }

    /**
     * @return ShipmentParcelSize
     */
    public function getDeclaredSize(): ShipmentParcelSize
    {
        return $this->declaredSize;
    }

    /**
     * @param ShipmentParcelSize $declaredSize
     */
    public function setDeclaredSize(ShipmentParcelSize $declaredSize): void
    {
        $this->declaredSize = $declaredSize;
    }

    /**
     * @return ShipmentParcelSize
     */
    public function getMeasuredSize(): ShipmentParcelSize
    {
        return $this->measuredSize;
    }

    /**
     * @param ShipmentParcelSize $measuredSize
     */
    public function setMeasuredSize(ShipmentParcelSize $measuredSize): void
    {
        $this->measuredSize = $measuredSize;
    }

    /**
     * @return ShipmentParcelSize
     */
    public function getCalculationSize(): ShipmentParcelSize
    {
        return $this->calculationSize;
    }

    /**
     * @param ShipmentParcelSize $calculationSize
     */
    public function setCalculationSize(ShipmentParcelSize $calculationSize): void
    {
        $this->calculationSize = $calculationSize;
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
     * @return array
     */
    public function getExternalCarrierParcelNumbers(): array
    {
        return $this->externalCarrierParcelNumbers;
    }

    /**
     * @param array $externalCarrierParcelNumbers
     */
    public function setExternalCarrierParcelNumbers(array $externalCarrierParcelNumbers): void
    {
        $this->externalCarrierParcelNumbers = $externalCarrierParcelNumbers;
    }

    /**
     * @return string
     */
    public function getBaseType(): string
    {
        return $this->baseType;
    }

    /**
     * @param string $baseType
     */
    public function setBaseType(string $baseType): void
    {
        $this->baseType = $baseType;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

}