<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentAdditionalServices.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 *
 * @Serializer\AccessType("public_method")
 */
class ShipmentAdditionalServices
{
    use ToArray;

    /**
     * @Serializer\Type("array")
     */
    private ?array $cod = null;

    /**
     * @Serializer\Type("array")
     */
    private ?array $obpd = null;

    /**
     * @Serializer\Type("array")
     */
    private ?array $declaredValue = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $fixedTimeDelivery = null;

    /**
     * @Serializer\Type("array")
     */
    private ?array $returns = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $specialDeliveryId = null;

    /**
     * @Serializer\Type("integer")
     */
    private ?int $deliveryToFloor = null;

    public function getCod(): array
    {
        return $this->cod;
    }

    public function setCod(array $cod): void
    {
        $this->cod = $cod;
    }

    public function getObpd(): array
    {
        return $this->obpd;
    }

    public function setObpd(array $obpd): void
    {
        $this->obpd = $obpd;
    }

    public function getDeclaredValue(): array
    {
        return $this->declaredValue;
    }

    public function setDeclaredValue(array $declaredValue): void
    {
        $this->declaredValue = $declaredValue;
    }

    public function getFixedTimeDelivery(): ?int
    {
        return $this->fixedTimeDelivery;
    }

    public function setFixedTimeDelivery(int $fixedTimeDelivery): void
    {
        $this->fixedTimeDelivery = $fixedTimeDelivery;
    }

    public function getReturns(): ?array
    {
        return $this->returns;
    }

    public function setReturns(array $returns): void
    {
        $this->returns = $returns;
    }

    public function getSpecialDeliveryId(): ?int
    {
        return $this->specialDeliveryId;
    }

    public function setSpecialDeliveryId(int $specialDeliveryId): void
    {
        $this->specialDeliveryId = $specialDeliveryId;
    }

    public function getDeliveryToFloor(): ?int
    {
        return $this->deliveryToFloor;
    }

    public function setDeliveryToFloor(int $deliveryToFloor): void
    {
        $this->deliveryToFloor = $deliveryToFloor;
    }
}
