<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class CreateShipmentRequest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CreateShipmentRequest
{
    /**
     * @var ShipmentRecipient
     */
    private ShipmentRecipient $recipient;

    /**
     * @var ShipmentService
     */
    private ShipmentService $service;

    /**
     * @var ShipmentContent
     */
    private ShipmentContent $content;

    /**
     * @var ShipmentPayment
     */
    private ShipmentPayment $payment;

    /**
     * @var ShipmentSender
     */
    private ShipmentSender $sender;

    /**
     * @var string
     */
    private string $shipmentNote;

    /**
     * @var string
     */

    private string $ref1;

    /**
     * @var string
     *
     */
    private string $ref2;

    /**
     * @var string
     */

    private string $consolidationRef;

    /**
     * @var bool
     */
    private bool $requireUnsuccessfulDeliveryStickerImage;

    /**
     * @param ShipmentRecipient $recipient
     * @param ShipmentService $service
     * @param ShipmentContent $content
     * @param ShipmentPayment $payment
     */
    public function __construct(ShipmentRecipient $recipient, ShipmentService $service, ShipmentContent $content, ShipmentPayment $payment)
    {
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
     * @return $this
     */
    public function setRecipient(ShipmentRecipient $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
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
     * @return $this
     */
    public function setService(ShipmentService $service): self
    {
        $this->service = $service;

        return $this;
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
     * @return $this
     */
    public function setContent(ShipmentContent $content): self
    {
        $this->content = $content;

        return $this;
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
     * @return $this
     */
    public function setPayment(ShipmentPayment $payment): self
    {
        $this->payment = $payment;

        return $this;
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
     * @return string
     */
    public function getShipmentNote(): string
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
     * @return string
     */
    public function getRef1(): string
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
    public function getRef2(): string
    {
        return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return $this
     */
    public function setRef2(string $ref2): self
    {
        $this->ref2 = $ref2;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsolidationRef(): string
    {
        return $this->consolidationRef;
    }

    /**
     * @param string $consolidationRef
     * @return $this
     */
    public function setConsolidationRef(string $consolidationRef): self
    {
        $this->consolidationRef = $consolidationRef;

        return $this;
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