<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;
use InvalidArgumentException;

use function strlen;
use function array_push;


/**
 * Class CreateShipmentRequest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
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
     * @var string|null
     */
    private ?string $shipmentNote = null;

    /**
     * @var string|null
     */

    private ?string $ref1 = null;

    /**
     * @var string|null
     *
     */
    private ?string $ref2 = null;

    /**
     * @var string|null
     */

    private ?string $consolidationRef = null;

    /**
     * @var bool
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
    private function setRecipient(ShipmentRecipient $recipient): void
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
    private function setService(ShipmentService $service): void
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
    private function setContent(ShipmentContent $content): void
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
    private function setPayment(ShipmentPayment $payment): void
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
        if (null !== $shipmentNote && strlen($shipmentNote) > 200)
        {
            throw new InvalidArgumentException();
        }

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
        if (null !== $ref1 && strlen($ref1) > 30)
        {
            throw new InvalidArgumentException();
        }

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
     * @return $this
     */
    public function setRef2(string $ref2): ?self
    {
        if (null !== $ref2 && strlen($ref2) > 30)
        {
            throw new InvalidArgumentException();
        }

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

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            Speedy::SENDER        => $this->sender->toArray(),
            Speedy::RECIPIENT     => $this->recipient->toArray(),
            Speedy::SERVICE       => $this->service->toArray(),
            Speedy::CONTENT       => $this->content->toArray(),
            Speedy::PAYMENT       => $this->payment->toArray(),
            Speedy::SHIPMENT_NOTE => $this->getShipmentNote(),
            Speedy::REF_1         => $this->getRef1(),
            Speedy::REF_2         => $this->getRef2(),
            Speedy::CONSOLIDATION_REF => '',
            Speedy::REQUIRE_UNSUCCESSFUL_DELIVERY_STICKER_IMAGE => '',
        ];
    }
}
