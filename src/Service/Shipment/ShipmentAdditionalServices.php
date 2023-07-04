<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentAdditionalServices
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 * @Serializer\AccessType("public_method")
 */
class ShipmentAdditionalServices
{
    use ToArray;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private ?array $cod = null;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private ?array $obpd = null;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private ?array $declaredValue = null;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private ?int $fixedTimeDelivery = null;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private ?array $returns = null;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private ?int $specialDeliveryId = null;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private ?int $deliveryToFloor = null;

    /**
     * @return array
     */
    public function getCod(): array
    {
        return $this->cod;
    }

    /**
     * @param array $cod
     */
    public function setCod(array $cod): void
    {
        $this->cod = $cod;
    }

    /**
     * @return array
     */
    public function getObpd(): array
    {
        return $this->obpd;
    }

    /**
     * @param array $obpd
     */
    public function setObpd(array $obpd): void
    {
        $this->obpd = $obpd;
    }

    /**
     * @return array
     */
    public function getDeclaredValue(): array
    {
        return $this->declaredValue;
    }

    /**
     * @param array $declaredValue
     */
    public function setDeclaredValue(array $declaredValue): void
    {
        $this->declaredValue = $declaredValue;
    }

    /**
     * @return int
     */
    public function getFixedTimeDelivery(): int
    {
        return $this->fixedTimeDelivery;
    }

    /**
     * @param int $fixedTimeDelivery
     */
    public function setFixedTimeDelivery(int $fixedTimeDelivery): void
    {
        $this->fixedTimeDelivery = $fixedTimeDelivery;
    }

    /**
     * @return array
     */
    public function getReturns(): array
    {
        return $this->returns;
    }

    /**
     * @param array $returns
     */
    public function setReturns(array $returns): void
    {
        $this->returns = $returns;
    }

    /**
     * @return int
     */
    public function getSpecialDeliveryId(): int
    {
        return $this->specialDeliveryId;
    }

    /**
     * @param int $specialDeliveryId
     */
    public function setSpecialDeliveryId(int $specialDeliveryId): void
    {
        $this->specialDeliveryId = $specialDeliveryId;
    }

    /**
     * @return int
     */
    public function getDeliveryToFloor(): int
    {
        return $this->deliveryToFloor;
    }

    /**
     * @param int $deliveryToFloor
     */
    public function setDeliveryToFloor(int $deliveryToFloor): void
    {
        $this->deliveryToFloor = $deliveryToFloor;
    }
}
