<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CreateShipmentRequest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class CreateShipmentRequest
{
    use ToArray;

    /**
     * @var ShipmentSender
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentSender")
     */
    private ShipmentSender $sender;

    /**
     * @var ShipmentRecipient
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentRecipient")
     */
    private ShipmentRecipient $recipient;

    /**
     * @var ShipmentService
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentService")
     */
    private ShipmentService $service;

    /**
     * @var ShipmentContent
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentContent")
     */
    private ShipmentContent $content;

    /**
     * @var ShipmentPayment
     * @Serializer\Type("VasilDakov\Speedy\Service\Shipment\ShipmentPayment")
     */
    private ShipmentPayment $payment;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $shipmentNote = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $ref1 = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $ref2 = null;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $consolidationRef = null;

    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    private bool $requireUnsuccessfulDeliveryStickerImage = false;

    /**
     * @param ShipmentSender $sender
     * @param ShipmentRecipient $recipient
     * @param ShipmentService $service
     * @param ShipmentContent $content
     * @param ShipmentPayment $payment
     * @param string $ref1
     */
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

    /**
     * @return ShipmentRecipient
     */
    public function getRecipient(): ShipmentRecipient
    {
        return $this->recipient;
    }

    /**
     * @param ShipmentRecipient $recipient
     * @return void
     */
    public function setRecipient(ShipmentRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * @return ShipmentService
     */
    public function getService(): ShipmentService
    {
        return $this->service;
    }

    /**
     * @param ShipmentService $service
     * @return void
     */
    public function setService(ShipmentService $service): void
    {
        $this->service = $service;
    }

    /**
     * @return ShipmentContent
     */
    public function getContent(): ShipmentContent
    {
        return $this->content;
    }

    /**
     * @param ShipmentContent $content
     * @return void
     */
    public function setContent(ShipmentContent $content): void
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
     * @return void
     */
    public function setPayment(ShipmentPayment $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * @return ShipmentSender
     */
    public function getSender(): ShipmentSender
    {
        return $this->sender;
    }

    /**
     * @param ShipmentSender $sender
     */
    public function setSender(ShipmentSender $sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return string|null
     */
    public function getShipmentNote(): ?string
    {
        return $this->shipmentNote;
    }

    /**
     * @param string $shipmentNote
     */
    public function setShipmentNote(string $shipmentNote): void
    {
        $this->shipmentNote = $shipmentNote;
    }

    /**
     * @return string|null
     */
    public function getRef1(): ?string
    {
        return $this->ref1;
    }

    /**
     * @param string $ref1
     */
    public function setRef1(string $ref1): void
    {
        $this->ref1 = $ref1;
    }

    /**
     * @return string|null
     */
    public function getRef2(): ?string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     */
    public function setRef2(string $ref2): void
    {
        $this->ref2 = $ref2;
    }

    /**
     * @return string|null
     */
    public function getConsolidationRef(): ?string
    {
        return $this->consolidationRef;
    }

    /**
     * @param string $consolidationRef
     * @return void
     */
    public function setConsolidationRef(string $consolidationRef): void
    {
        $this->consolidationRef = $consolidationRef;
    }

    /**
     * @return bool
     */
    public function getRequireUnsuccessfulDeliveryStickerImage(): bool
    {
        return $this->requireUnsuccessfulDeliveryStickerImage;
    }

    /**
     * @param bool $requireUnsuccessfulDeliveryStickerImage
     */
    public function setRequireUnsuccessfulDeliveryStickerImage(bool $requireUnsuccessfulDeliveryStickerImage): void
    {
        $this->requireUnsuccessfulDeliveryStickerImage = $requireUnsuccessfulDeliveryStickerImage;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            "service" => $this->service->toArray(), // ok
            "content" => $this->content->toArray(), // ok
            "payment" => $this->payment->toArray(), // ok
            "sender"  => $this->sender->toArray(),  // ok
            /* "sender" => [
                "phone1" => [
                    "number" => "0888323020"
                ],
                "contactName" => "VASIL DAKOV",
                "email" => "vasildakov@gmail.com"
            ], */
            "recipient" => $this->recipient->toArray(), // ok
            "ref1" => $this->ref1
        ];
    }
}
