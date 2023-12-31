<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Parcel.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class Parcel
{
    /**
     * @Serializer\Type("string")
     */
    private string $id;

    /**
     * @Serializer\Type("int")
     */
    private int $seqNo;

    /**
     * @Serializer\Type("int")
     */
    private int $packageUniqueNumber;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Size>")
     */
    private Size $declaredSize;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Size")
     */
    private Size $measuredSize;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\Size")
     */
    private Size $calculationSize;

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
     * @Serializer\Type("array")
     * In documentation the data type is described as "String[]"
     */
    private array $externalCarrierParcelNumbers;

    /**
     * @Serializer\Type("string")
     */
    private string $baseType;

    /**
     * @Serializer\Type("string")
     */
    private string $size;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getSeqNo(): int
    {
        return $this->seqNo;
    }

    public function setSeqNo(int $seqNo): void
    {
        $this->seqNo = $seqNo;
    }

    public function getPackageUniqueNumber(): int
    {
        return $this->packageUniqueNumber;
    }

    public function setPackageUniqueNumber(int $packageUniqueNumber): void
    {
        $this->packageUniqueNumber = $packageUniqueNumber;
    }

    public function setDeclaredSize(Size $declaredSize): void
    {
        $this->declaredSize = $declaredSize;
    }

    public function getDeclaredSize(): Size
    {
        return $this->declaredSize;
    }

    public function getMeasuredSize(): Size
    {
        return $this->measuredSize;
    }

    public function setMeasuredSize(Size $measuredSize): void
    {
        $this->measuredSize = $measuredSize;
    }

    public function getCalculationSize(): Size
    {
        return $this->calculationSize;
    }

    public function setCalculationSize(Size $calculationSize): void
    {
        $this->calculationSize = $calculationSize;
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

    public function getExternalCarrierParcelNumbers(): array
    {
        return $this->externalCarrierParcelNumbers;
    }

    public function setExternalCarrierParcelNumbers(array $externalCarrierParcelNumbers): void
    {
        $this->externalCarrierParcelNumbers = $externalCarrierParcelNumbers;
    }

    public function getBaseType(): string
    {
        return $this->baseType;
    }

    public function setBaseType(string $baseType): void
    {
        $this->baseType = $baseType;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    public function toArray(): array
    {
        return [];
    }
}
