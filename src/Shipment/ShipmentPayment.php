<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Speedy;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class ShipmentPayment
 *
 * @Serializer\AccessType("public_method")
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
 */
class ShipmentPayment
{
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
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @var BankAccount|null
     * @Serializer\Type("VasilDakov\Speedy\Model\BankAccount")
     */
    private ?BankAccount $senderBankAccount = null;

    /**
     * @param string|null $courierServicePayer
     */
    public function __construct(string $courierServicePayer)
    {
        $this->setCourierServicePayer($courierServicePayer);
    }

    /**
     * @param string
     */
    public function setCourierServicePayer(string $courierServicePayer)
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
     * @param string|null $declaredValuePayer
     * @return $this
     */
    public function setDeclaredValuePayer(?string $declaredValuePayer = null): self
    {
        $this->declaredValuePayer = $declaredValuePayer;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeclaredValuePayer(): ?string
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param string $packagePayer
     * @return $this
     */
    public function setPackagePayer(string $packagePayer) :self
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
    public function setThirdPartyClientId(?int $thirdPartyClientId) : self
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

    /**
     * @return array
     */
    public function toArray(): array
    {
        $data = [
            Speedy::COURIER_SERVICE_PAYER => $this->getCourierServicePayer()
        ];

        if (null !== $this->declaredValuePayer) {
            $data[Speedy::DECLARED_VALUE_PAYER] = $this->getDeclaredValuePayer();
        }

        if (null !== $this->packagePayer ) {
            $data[Speedy::PACKAGE_PAYER] = $this->getPackagePayer();
        }

        if (null !== $this->thirdPartyClientId) {
            $data[Speedy::THIRD_PARTY_CLIENT_ID] = $this->getThirdPartyClientId();
        }

        if (null !== $this->discountCardId) {
            $data[Speedy::DISCOUNT_CARD_ID] = $this->getDiscountCardId();
        }

        if (null !== $this->senderBankAccount) {
            $data[Speedy::SENDER_BANK_ACCOUNT] = $this->getSenderBankAccount();
        }

        return $data;
    }
}
