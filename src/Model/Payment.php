<?php

declare(strict_types=1);


namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;

/**
 * Class Payment
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Payment
{
    /**
     * @var
     * @TODO! This is the Payer class in Shipment directory. Enum data type.
     */
    private $courierServicePayer;

    /**
     * @var
     * @TODO! This is the Payer class in Shipment directory. Enum data type.
     */
    private $declaredValuePayer;

    /**
     * @var
     * @TODO! This is the Payer class in Shipment directory. Enum data type.
     */
    private $packagePayer;

    private int $thirdPartyClientId;

    /**
     * @var ShipmentDiscountCardId
     * @TODO! The ShipmentDiscountCardId class is in Shipment directory.
     */
    private ShipmentDiscountCardId $discountCardId;

    /**
     * @var CODPayment
     */
    private CODPayment $codPayment;

    /**
     * @return mixed
     */
    public function getCourierServicePayer()
    {
        return $this->courierServicePayer;
    }

    /**
     * @param mixed $courierServicePayer
     */
    public function setCourierServicePayer($courierServicePayer): void
    {
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return mixed
     */
    public function getDeclaredValuePayer()
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param mixed $declaredValuePayer
     */
    public function setDeclaredValuePayer($declaredValuePayer): void
    {
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @return mixed
     */
    public function getPackagePayer()
    {
        return $this->packagePayer;
    }

    /**
     * @param mixed $packagePayer
     */
    public function setPackagePayer($packagePayer): void
    {
        $this->packagePayer = $packagePayer;
    }

    /**
     * @return int
     */
    public function getThirdPartyClientId(): int
    {
        return $this->thirdPartyClientId;
    }

    /**
     * @param int $thirdPartyClientId
     */
    public function setThirdPartyClientId(int $thirdPartyClientId): void
    {
        $this->thirdPartyClientId = $thirdPartyClientId;
    }

    /**
     * @return ShipmentDiscountCardId
     */
    public function getDiscountCardId(): ShipmentDiscountCardId
    {
        return $this->discountCardId;
    }

    /**
     * @param ShipmentDiscountCardId $discountCardId
     */
    public function setDiscountCardId(ShipmentDiscountCardId $discountCardId): void
    {
        $this->discountCardId = $discountCardId;
    }

    /**
     * @return CODPayment
     */
    public function getCodPayment(): CODPayment
    {
        return $this->codPayment;
    }

    /**
     * @param CODPayment $codPayment
     */
    public function setCodPayment(CODPayment $codPayment): void
    {
        $this->codPayment = $codPayment;
    }

}