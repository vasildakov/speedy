<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Traits\ToArray;

/**
 * Class CreateShipmentRequest
 *
 * @Serializer\AccessType("public_method")
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 * @version
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
     */
    public function __construct(
        ShipmentSender $sender,
        ShipmentRecipient $recipient,
        ShipmentService $service,
        ShipmentContent $content,
        ShipmentPayment $payment
    ) {
        $this->setSender($sender);
        $this->setRecipient($recipient);
        $this->setService($service);
        $this->setContent($content);
        $this->setPayment($payment);
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
     * @return $this
     */
    public function setSender(ShipmentSender $sender): self
    {
        $this->sender = $sender;

        return $this;
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
     * @return $this
     */
    public function setShipmentNote(string $shipmentNote): self
    {
        $this->shipmentNote = $shipmentNote;

        return $this;
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
     * @return $this
     */
    public function setRef1(string $ref1): self
    {
        $this->ref1 = $ref1;

        return $this;
    }

    /**
     * @return string
     */
    public function getRef2(): ?string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return $this|null
     */
    public function setRef2(string $ref2): ?self
    {
        $this->ref2 = $ref2;

        return $this;
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
     * @return $this
     */
    public function setRequireUnsuccessfulDeliveryStickerImage(bool $requireUnsuccessfulDeliveryStickerImage): self
    {
        $this->requireUnsuccessfulDeliveryStickerImage = $requireUnsuccessfulDeliveryStickerImage;

        return $this;
    }
}
