<?php
declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Payment
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Payment
{
    public const SENDER = 1;
    public const RECIPIENT = 2;
    public const THIRD_PARTY = 3;

    public const COURIER_SERVICE_PAYERS = [
        self::SENDER => 'SENDER',
        self::RECIPIENT => 'RECIPIENT',
        self::THIRD_PARTY => 'THIRD_PARTY'

    ];

    public const DECLARED_VALUE_PAYERS = [
        self::SENDER => 'SENDER',
        self::RECIPIENT => 'RECIPIENT',
        self::THIRD_PARTY => 'THIRD_PARTY'

    ];

    public const PACKAGE_PAYERS = [
        self::SENDER => 'SENDER',
        self::RECIPIENT => 'RECIPIENT',
        self::THIRD_PARTY => 'THIRD_PARTY'

    ];

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $courierServicePayer;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $declaredValuePayer;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $packagePayer;

    /**
     * @var int
     * @Serializer\Type("int")
     */
    private int $thirdPartyClientId;

    /**
     * @var ShipmentDiscountCardId
     * @Serializer\Type("ShipmentDiscountCardId")
     */
    private ShipmentDiscountCardId $discountCardId;

    /**
     * @var CODPayment
     * @Serializer\Type("CODPayment")
     */
    private CODPayment $codPayment;

    /**
     * @return string
     */
    public function getCourierServicePayer(): string
    {
        return $this->courierServicePayer;
    }

    /**
     * @param string $courierServicePayer
     */
    public function setCourierServicePayer(string $courierServicePayer): void
    {
//        if (!\in_array($courierServicePayer, \array_values(self::COURIER_SERVICE_PAYERS))) {
//            throw new InvalidArgumentException();}

        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return string
     */
    public function getDeclaredValuePayer(): string
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param string $declaredValuePayer
     */
    public function setDeclaredValuePayer(string $declaredValuePayer): void
    {
//        if (!\in_array($declaredValuePayer, \array_values(self::DECLARED_VALUE_PAYERS))) {
//            throw new InvalidArgumentException();}
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @return string
     */
    public function getPackagePayer(): string
    {
        return $this->packagePayer;
    }

    /**
     * @param string $packagePayer
     */
    public function setPackagePayer(string $packagePayer): void
    {
//        if (!\in_array($packagePayer, \array_values(self::PACKAGE_PAYERS), true)) {
//            throw new InvalidArgumentException();}
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

    public function toArray(): array
    {
        return [
            'courierServicePayer' => $this->getCourierServicePayer(),
            'declaredValuePayer' => $this->getDeclaredValuePayer(),
            'packagePayer' => $this->getPackagePayer(),
            'thirdPartyClientId' => $this->getThirdPartyClientId(),
            'discountCardId' => $this->getDiscountCardId()->toArray(),
            'codPayment' => $this->getCodPayment()->toArray()
        ];
    }
}