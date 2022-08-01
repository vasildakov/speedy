<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;

class ShipmentPayment
{
    public const COURIER_SERVICE_PAYER = ['SENDER', 'RECIPIENT', 'THIRD_PARTY'];
    public const DECLARED_VALUE_PAYER = ['SENDER', 'RECIPIENT', 'THIRD_PARTY'];
    public const PACKAGE_PAYER = ['SENDER', 'RECIPIENT', 'THIRD_PARTY'];
    /**
     * @var CourierServicePayer
     */
    private CourierServicePayer $courierServicePayer;

    /**
     * @var declaredValuePayer
     */
    private declaredValuePayer $declaredValuePlayer;

    /**
     * @var packagePayer
     */
    private packagePayer $packagePayer;

    /**
     * @var int
     */
    private int $thirdPartyClientId;

    /**
     * @var ShipmentDiscountCardId
     */
    private ShipmentDiscountCardId $discountCardId;

    /**
     * @var BankAccount
     */
    private BankAccount $senderBankAccount;

    /**
     * @param $courierServicePayer
     */
    public function __construct($courierServicePayer)
    {
        $this->setCourierServicePayer($courierServicePayer);
    }

    /**
     * @return CourierServicePayer
     */
    public function getCourierServicePayer(): CourierServicePayer
    {
        return $this->courierServicePayer;
    }

    /**
     * @param CourierServicePayer $courierServicePayer
     */
    public function setCourierServicePayer(CourierServicePayer $courierServicePayer): void
    {
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return declaredValuePayer
     */
    public function getDeclaredValuePlayer(): declaredValuePayer
    {
        return $this->declaredValuePlayer;
    }

    /**
     * @param declaredValuePayer $declaredValuePlayer
     */
    public function setDeclaredValuePlayer(declaredValuePayer $declaredValuePlayer): void
    {
        $this->declaredValuePlayer = $declaredValuePlayer;
    }

    /**
     * @return packagePayer
     */
    public function getPackagePayer(): packagePayer
    {
        return $this->packagePayer;
    }

    /**
     * @param packagePayer $packagePayer
     */
    public function setPackagePayer(packagePayer $packagePayer): void
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
     * @return BankAccount
     */
    public function getSenderBankAccount(): BankAccount
    {
        return $this->senderBankAccount;
    }

    /**
     * @param BankAccount $senderBankAccount
     */
    public function setSenderBankAccount(BankAccount $senderBankAccount): void
    {
        $this->senderBankAccount = $senderBankAccount;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            Speedy::COURIER_SERVICE_PAYER       => $this->courierServicePayer->toArray(),
            Speedy::DECLARED_VALUE_PAYER        =>$this->declaredValuePlayer->toArray(),
            Speedy::PACKAGE_PAYER               => $this->packagePayer->toArray(),
            Speedy::THIRD_PARTY_CLIENT_ID       => $this->getThirdPartyClientId(),
            Speedy::DISCOUNT_CARD_ID            =>$this->discountCardId->toArray(),
            Speedy::SENDER_BANK_ACCOUNT         => $this->senderBankAccount->toArray()
        ];
    }
}
