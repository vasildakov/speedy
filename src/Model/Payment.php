<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId;
use VasilDakov\Speedy\Traits\ToArray;

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
    use ToArray;

    public const SENDER      = 'SENDER';
    public const RECIPIENT   = 'RECIPIENT';
    public const THIRD_PARTY = 'THIRD_PARTY';

    public const PAYER_OPTIONS = [
        self::SENDER,
        self::RECIPIENT,
        self::THIRD_PARTY
    ];

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $courierServicePayer = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $declaredValuePayer = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $packagePayer = null;

    /**
     * @var int|null
     * @Serializer\Type("int")
     */
    private ?int $thirdPartyClientId = null;

    /**
     * @var ShipmentDiscountCardId|null
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @var CODPayment|null
     * @Serializer\Type("VasilDakov\Speedy\Model\CODPayment")
     */
    private ?CODPayment $codPayment = null;

    /**
     * @return string|null
     */
    public function getCourierServicePayer(): ?string
    {
        return $this->courierServicePayer;
    }

    /**
     * @param string $courierServicePayer
     */
    public function setCourierServicePayer(string $courierServicePayer): void
    {
        if (! $this->isValidPayer($courierServicePayer)) {
            throw new InvalidArgumentException();
        }
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return string|null
     */
    public function getDeclaredValuePayer(): ?string
    {
        return $this->declaredValuePayer;
    }

    /**
     * @param string $declaredValuePayer
     */
    public function setDeclaredValuePayer(string $declaredValuePayer): void
    {
        if (! $this->isValidPayer($declaredValuePayer)) {
            throw new InvalidArgumentException();
        }
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @return string|null
     */
    public function getPackagePayer(): ?string
    {
        return $this->packagePayer;
    }

    /**
     * @param string $packagePayer
     */
    public function setPackagePayer(string $packagePayer): void
    {
        if (! $this->isValidPayer($packagePayer)) {
            throw new InvalidArgumentException();
        }
        $this->packagePayer = $packagePayer;
    }

    /**
     * @return int|null
     */
    public function getThirdPartyClientId(): ?int
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
     * @return ShipmentDiscountCardId|null
     */
    public function getDiscountCardId(): ?ShipmentDiscountCardId
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
     * @return CODPayment|null
     */
    public function getCodPayment(): ?CODPayment
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

    /**
     * @param string $payer
     * @return bool
     */
    private function isValidPayer(string $payer): bool
    {
        if (\in_array($payer, self::PAYER_OPTIONS)) {
            return true;
        }
        return false;
    }
}
