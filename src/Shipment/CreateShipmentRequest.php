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
     * @return ShipmentService
     */
    public function getService(): ShipmentService
    {
        return $this->service;
    }

    /**
     * @param ShipmentService $service
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
     */
    public function setPayment(ShipmentPayment $payment): void
    {
        $this->payment = $payment;
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
     */
    public function setRecipient(ShipmentRecipient $recipient): void
    {
        $this->recipient = $recipient;
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




}