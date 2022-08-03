<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentPayment
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentPayment
{

    /**
     * @var Payer
     */
    private Payer $courierServicePayer;

    /**
     * @var Payer|null
     */
    private ?Payer $declaredValuePayer = null;

    /**
     * @var Payer|null
     */
    private ?Payer $packagePayer = null;

    /**
     * @var int|null
     */
    private ?int $thirdPartyClientId = null;

    /**
     * @var ShipmentDiscountCardId|null
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @var BankAccount|null
     */
    private ?BankAccount $senderBankAccount = null;

    /**
     * @param Payer $courierServicePayer
     */
    public function __construct(Payer $courierServicePayer)
    {
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return Payer
     */
    public function getCourierServicePayer(): Payer
    {
        return $this->courierServicePayer;
    }

    /**
     * @param Payer $declaredValuePayer
     * @return $this
     */
    public function setDeclaredValuePayer(Payer $declaredValuePayer): self
    {
        $this->declaredValuePayer = $declaredValuePayer;

        return $this;
    }

    /**
     * @return Payer|null
     */
    public function getDeclaredValuePayer(): ?Payer
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param Payer $packagePayer
     * @return $this
     */
    public function setPackagePayer(Payer $packagePayer) :self
    {
        $this->packagePayer = $packagePayer;

        return $this;
    }
    /**
     * @return Payer|null
     */
    public function getPackagePayer(): ?Payer
    {
        return $this->packagePayer;
    }

    /**
     * @param int $thirdPartyClientId
     * @return $this
     */
    public function setThirdPartyClientId(int $thirdPartyClientId) : self
    {
        $this->thirdPartyClientId = $thirdPartyClientId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getThirdPartyClientId(): ?int
    {
        return $this->thirdPartyClientId;
    }

    /**
     * @param ShipmentDiscountCardId $discountCardId
     * @return ShipmentPayment
     */
    public function setDiscountCardId(ShipmentDiscountCardId $discountCardId): self
    {
        $this->discountCardId = $discountCardId;

        return $this;
    }

    /**
     * @return ShipmentDiscountCardId|null
     */
    public function getDiscountCardId(): ?ShipmentDiscountCardId
    {
       return $this->discountCardId;
    }

    /**
     * @param BankAccount $bankAccount
     * @return $this
     */
    public function setSenderBankAccount(BankAccount $bankAccount): self
    {
        $this->senderBankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return BankAccount|null
     */
    public function getSenderBankAccount(): ?BankAccount
    {
        return $this->senderBankAccount;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = [
            Speedy::COURIER_SERVICE_PAYER =>  (string) $this->getCourierServicePayer()
        ];

        // short hand ternary operator
        // $data[Speedy::DECLARED_VALUE_PAYER] = ($this->declaredValuePayer) ?: null;

        if (null !== $this->declaredValuePayer) {
            $data[Speedy::DECLARED_VALUE_PAYER] = $this->declaredValuePayer;
        }

        if (null !== $this->packagePayer ) {
            $data[Speedy::PACKAGE_PAYER] = $this->packagePayer;
        }

        if (null !== $this->thirdPartyClientId) {
        $data[Speedy::THIRD_PARTY_CLIENT_ID] = $this->thirdPartyClientId;
        }

        if (null !== $this->discountCardId) {
            $data[Speedy::DISCOUNT_CARD_ID] = $this->discountCardId;
        }

        if (null !== $this->senderBankAccount) {
            $data[Speedy::SENDER_BANK_ACCOUNT] = $this->senderBankAccount;
        }

        return $data;
    }
}
