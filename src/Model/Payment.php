<?php declare(strict_types=1);

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
    public const SENDER      = 1;

    public const RECIPIENT   = 2;

    public const THIRD_PARTY = 3;

    public const PAYER_OPTIONS = [
        self::SENDER      => 'SENDER',
        self::RECIPIENT   => 'RECIPIENT',
        self::THIRD_PARTY => 'THIRD_PARTY'
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
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ShipmentDiscountCardId")
     */
    private ?ShipmentDiscountCardId $discountCardId = null;

    /**
     * @var CODPayment
     * @Serializer\Type("VasilDakov\Speedy\Model\CODPayment")
     */
    private CODPayment $codPayment;

    /**
     * @return string
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
        if (!$this->isValidPayer($courierServicePayer)) {
            throw new InvalidArgumentException();
        }
        $this->courierServicePayer = $courierServicePayer;
    }

    /**
     * @return string
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
        if (!$this->isValidPayer($declaredValuePayer)) {
            throw new InvalidArgumentException();
        }
        $this->declaredValuePayer = $declaredValuePayer;
    }

    /**
     * @return string
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
        if (!$this->isValidPayer($packagePayer)) {
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

    /**
     * @param string $payer
     * @return bool
     */
    private function isValidPayer(string $payer): bool
    {
        if (\in_array($payer, \array_values(self::PAYER_OPTIONS), true)) {
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $array = [
            'courierServicePayer' => $this->getCourierServicePayer(),
            'declaredValuePayer'  => $this->getDeclaredValuePayer(),
            'packagePayer'        => $this->getPackagePayer(),
            'thirdPartyClientId'  => $this->getThirdPartyClientId(),
        ];

        if ($this->getDiscountCardId() instanceof ShipmentDiscountCardId) {
            $array['discountCardId'] = $this->getDiscountCardId()->toArray();
        }

        //'codPayment' => $this->getCodPayment()->toArray()

        return $array;
    }
}
