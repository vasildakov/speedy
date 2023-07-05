<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class ShipmentPayment
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 * @Serializer\AccessType("public_method")
 */
class ShipmentPayment
{
    use ToArray;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $courierServicePayer;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $declaredValuePayer = '';

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $packagePayer = '';

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    private ?int $thirdPartyClientId = null;

    /**
     * @var ShipmentDiscountCardId|null
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @var BankAccount|null
     * @Serializer\Type("VasilDakov\Speedy\Model\BankAccount")
     */
    private ?BankAccount $senderBankAccount = null;

    /**
     * @param string $courierServicePayer
     * @param string $declaredValuePayer
     */
    public function __construct(string $courierServicePayer, string $declaredValuePayer)
    {
        $this->courierServicePayer = $courierServicePayer;
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @param string $courierServicePayer
     * @return void
     */
    public function setCourierServicePayer(string $courierServicePayer): void
    {
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return string
     */
    public function getCourierServicePayer(): string
    {
        return $this->courierServicePayer;
    }

    /**
     * @param string $declaredValuePayer
     */
    public function setDeclaredValuePayer(string $declaredValuePayer): void
    {
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @return string
     */
    public function getDeclaredValuePayer(): string
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param string $packagePayer
     * @return $this
     */
    public function setPackagePayer(string $packagePayer): self
    {
        $this->packagePayer = $packagePayer;

        return $this;
    }
    /**
     * @return string|null
     */
    public function getPackagePayer(): ?string
    {
        return $this->packagePayer;
    }

    /**
     * @param int|null $thirdPartyClientId
     * @return $this
     */
    public function setThirdPartyClientId(?int $thirdPartyClientId): self
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
     * @param ShipmentDiscountCardId|null $discountCardId
     * @return ShipmentPayment
     */
    public function setDiscountCardId(ShipmentDiscountCardId $discountCardId = null): self
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
     * @param BankAccount|null $bankAccount
     * @return $this
     */
    public function setSenderBankAccount(BankAccount $bankAccount = null): self
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

    public function toArray(): array
    {
        return [
            'courierServicePayer' => $this->courierServicePayer,
            'declaredValuePayer'  => $this->declaredValuePayer,
        ];
    }
}
