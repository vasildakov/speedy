<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Shipment\ShipmentPayment;

/**
 * Class CalculationRequest
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationRequest
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $clientSystemId = null;

    /**
     * @var CalculationSender|null
     * @Serializer\Type("VasilDakov\Speedy\Shipment\CalculationSender")
     */
    private ?CalculationSender $sender = null;

    /**
     * @var CalculationRecipient
     * @Serializer\Type("VasilDakov\Speedy\Shipment\CalculationRecipient")
     */
    private CalculationRecipient $recipient;

    /**
     * @var CalculationService
     * @Serializer\Type("VasilDakov\Speedy\Shipment\CalculationService")
     */
    private CalculationService $service;

    /**
     * @var CalculationContent
     * @Serializer\Type("VasilDakov\Speedy\Shipment\CalculationContent")
     */
    private CalculationContent $content;

    /**
     * @var ShipmentPayment
     * @Serializer\Type("VasilDakov\Speedy\Shipment\ShipmentPayment")
     */
    private ShipmentPayment $payment;

    /**
     * @return string|null
     */
    public function getClientSystemId(): ?string
    {
        return $this->clientSystemId;
    }

    /**
     * @param string|null $clientSystemId
     */
    public function setClientSystemId(?string $clientSystemId): void
    {
        $this->clientSystemId = $clientSystemId;
    }

    /**
     * @return CalculationSender|null
     */
    public function getSender(): ?CalculationSender
    {
        return $this->sender;
    }

    /**
     * @param CalculationSender|null $sender
     */
    public function setSender(?CalculationSender $sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return CalculationRecipient
     */
    public function getRecipient(): CalculationRecipient
    {
        return $this->recipient;
    }

    /**
     * @param CalculationRecipient $recipient
     */
    public function setRecipient(CalculationRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * @return CalculationService
     */
    public function getService(): CalculationService
    {
        return $this->service;
    }

    /**
     * @param CalculationService $service
     */
    public function setService(CalculationService $service): void
    {
        $this->service = $service;
    }

    /**
     * @return CalculationContent
     */
    public function getContent(): CalculationContent
    {
        return $this->content;
    }

    /**
     * @param CalculationContent $content
     */
    public function setContent(CalculationContent $content): void
    {
        $this->content = $content;
    }

    /**
     * @return ShipmentPayment
     */
    public function getPayment(): ShipmentPayment
    {
        return $this->payment;
    }

    /**
     * @param ShipmentPayment $payment
     */
    public function setPayment(ShipmentPayment $payment): void
    {
        $this->payment = $payment;
    }
}
