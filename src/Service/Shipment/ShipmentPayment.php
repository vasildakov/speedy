<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentPayment.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 *
 * @Serializer\AccessType("public_method")
 */
class ShipmentPayment
{
    use ToArray;

    /**
     * @Serializer\Type("string")
     */
    private string $courierServicePayer;

    /**
     * @Serializer\Type("string")
     */
    private ?string $declaredValuePayer = '';

    /**
     * @Serializer\Type("string")
     */
    private ?string $packagePayer = '';

    /**
     * @Serializer\Type("integer")
     */
    private ?int $thirdPartyClientId = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\BankAccount")
     */
    private ?BankAccount $senderBankAccount = null;

    public function __construct(string $courierServicePayer, string $declaredValuePayer)
    {
        $this->courierServicePayer = $courierServicePayer;
        $this->declaredValuePayer = $declaredValuePayer;
    }

    public function setCourierServicePayer(string $courierServicePayer): void
    {
        $this->courierServicePayer = $courierServicePayer;
    }

    public function getCourierServicePayer(): string
    {
        return $this->courierServicePayer;
    }

    public function setDeclaredValuePayer(string $declaredValuePayer): void
    {
        $this->declaredValuePayer = $declaredValuePayer;
    }

    public function getDeclaredValuePayer(): ?string
    {
        return $this->declaredValuePayer;
    }

    /**
     * @return $this
     */
    public function setPackagePayer(string $packagePayer): self
    {
        $this->packagePayer = $packagePayer;

        return $this;
    }

    public function getPackagePayer(): ?string
    {
        return $this->packagePayer;
    }

    /**
     * @return $this
     */
    public function setThirdPartyClientId(?int $thirdPartyClientId): self
    {
        $this->thirdPartyClientId = $thirdPartyClientId;

        return $this;
    }

    public function getThirdPartyClientId(): ?int
    {
        return $this->thirdPartyClientId;
    }

    public function setDiscountCardId(ShipmentDiscountCardId $discountCardId = null): self
    {
        $this->discountCardId = $discountCardId;

        return $this;
    }

    public function getDiscountCardId(): ?ShipmentDiscountCardId
    {
        return $this->discountCardId;
    }

    /**
     * @return $this
     */
    public function setSenderBankAccount(BankAccount $bankAccount = null): self
    {
        $this->senderBankAccount = $bankAccount;

        return $this;
    }

    public function getSenderBankAccount(): ?BankAccount
    {
        return $this->senderBankAccount;
    }

    public function toArray(): array
    {
        return [
            Property::COURIER_SERVICE_PAYER->value => $this->courierServicePayer,
            Property::DECLARED_VALUE_PAYER->value => $this->declaredValuePayer,
        ];
    }
}
