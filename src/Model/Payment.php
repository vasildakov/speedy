<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class Payment.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Payment
{
    use ToArray;

    public const SENDER = 'SENDER';
    public const RECIPIENT = 'RECIPIENT';
    public const THIRD_PARTY = 'THIRD_PARTY';

    public const PAYER_OPTIONS = [
        self::SENDER,
        self::RECIPIENT,
        self::THIRD_PARTY,
    ];

    /**
     * @Serializer\Type("string")
     */
    private ?string $courierServicePayer = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $declaredValuePayer = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $packagePayer = null;

    /**
     * @Serializer\Type("int")
     */
    private ?int $thirdPartyClientId = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Model\CODPayment")
     */
    private ?CODPayment $codPayment = null;

    public function getCourierServicePayer(): ?string
    {
        return $this->courierServicePayer;
    }

    public function setCourierServicePayer(string $courierServicePayer): void
    {
        if (!$this->isValidPayer($courierServicePayer)) {
            throw new InvalidArgumentException();
        }
        $this->courierServicePayer = $courierServicePayer;
    }

    public function getDeclaredValuePayer(): ?string
    {
        return $this->declaredValuePayer;
    }

    public function setDeclaredValuePayer(string $declaredValuePayer): void
    {
        if (!$this->isValidPayer($declaredValuePayer)) {
            throw new InvalidArgumentException();
        }
        $this->declaredValuePayer = $declaredValuePayer;
    }

    public function getPackagePayer(): ?string
    {
        return $this->packagePayer;
    }

    public function setPackagePayer(string $packagePayer): void
    {
        if (!$this->isValidPayer($packagePayer)) {
            throw new InvalidArgumentException();
        }
        $this->packagePayer = $packagePayer;
    }

    public function getThirdPartyClientId(): ?int
    {
        return $this->thirdPartyClientId;
    }

    public function setThirdPartyClientId(int $thirdPartyClientId): void
    {
        $this->thirdPartyClientId = $thirdPartyClientId;
    }

    public function getDiscountCardId(): ?ShipmentDiscountCardId
    {
        return $this->discountCardId;
    }

    public function setDiscountCardId(ShipmentDiscountCardId $discountCardId): void
    {
        $this->discountCardId = $discountCardId;
    }

    public function getCodPayment(): ?CODPayment
    {
        return $this->codPayment;
    }

    public function setCodPayment(CODPayment $codPayment): void
    {
        $this->codPayment = $codPayment;
    }

    private function isValidPayer(string $payer): bool
    {
        if (\in_array($payer, self::PAYER_OPTIONS)) {
            return true;
        }

        return false;
    }
}
