<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CreateShipmentRequest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 *
 * @Serializer\AccessType("public_method")
 */
class CreateShipmentRequest
{
    use ToArray;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentSender")
     */
    private ShipmentSender $sender;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentRecipient")
     */
    private ShipmentRecipient $recipient;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentService")
     */
    private ShipmentService $service;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentContent")
     */
    private ShipmentContent $content;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentPayment")
     */
    private ShipmentPayment $payment;

    /**
     * @Serializer\Type("string")
     */
    private ?string $shipmentNote = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $ref1 = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $ref2 = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $consolidationRef = null;

    /**
     * @Serializer\Type("bool")
     */
    private bool $requireUnsuccessfulDeliveryStickerImage = false;

    public function __construct(
        ShipmentSender $sender,
        ShipmentRecipient $recipient,
        ShipmentService $service,
        ShipmentContent $content,
        ShipmentPayment $payment,
        string $ref1
    ) {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->service = $service;
        $this->content = $content;
        $this->payment = $payment;
        $this->ref1 = $ref1;
    }

    public function getRecipient(): ShipmentRecipient
    {
        return $this->recipient;
    }

    public function setRecipient(ShipmentRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    public function getService(): ShipmentService
    {
        return $this->service;
    }

    public function setService(ShipmentService $service): void
    {
        $this->service = $service;
    }

    public function getContent(): ShipmentContent
    {
        return $this->content;
    }

    public function setContent(ShipmentContent $content): void
    {
        $this->content = $content;
    }

    public function getPayment(): ShipmentPayment
    {
        return $this->payment;
    }

    public function setPayment(ShipmentPayment $payment): void
    {
        $this->payment = $payment;
    }

    public function getSender(): ShipmentSender
    {
        return $this->sender;
    }

    public function setSender(ShipmentSender $sender): void
    {
        $this->sender = $sender;
    }

    public function getShipmentNote(): ?string
    {
        return $this->shipmentNote;
    }

    public function setShipmentNote(string $shipmentNote): void
    {
        $this->shipmentNote = $shipmentNote;
    }

    public function getRef1(): ?string
    {
        return $this->ref1;
    }

    public function setRef1(string $ref1): void
    {
        $this->ref1 = $ref1;
    }

    public function getRef2(): ?string
    {
        return $this->ref2;
    }

    public function setRef2(string $ref2): void
    {
        $this->ref2 = $ref2;
    }

    public function getConsolidationRef(): ?string
    {
        return $this->consolidationRef;
    }

    public function setConsolidationRef(string $consolidationRef): void
    {
        $this->consolidationRef = $consolidationRef;
    }

    public function getRequireUnsuccessfulDeliveryStickerImage(): bool
    {
        return $this->requireUnsuccessfulDeliveryStickerImage;
    }

    public function setRequireUnsuccessfulDeliveryStickerImage(bool $requireUnsuccessfulDeliveryStickerImage): void
    {
        $this->requireUnsuccessfulDeliveryStickerImage = $requireUnsuccessfulDeliveryStickerImage;
    }

    public function toArray(): array
    {
        return [
            'service' => $this->service->toArray(), // ok
            'content' => $this->content->toArray(), // ok
            'payment' => $this->payment->toArray(), // ok
            'sender' => $this->sender->toArray(),  // ok
            /* "sender" => [
                "phone1" => [
                    "number" => "0888323020"
                ],
                "contactName" => "VASIL DAKOV",
                "email" => "vasildakov@gmail.com"
            ], */
            'recipient' => $this->recipient->toArray(), // ok
            'ref1' => $this->ref1,
        ];
    }
}
