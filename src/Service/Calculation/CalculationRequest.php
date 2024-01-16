<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Speedy;

/**
 * Class CalculationRequest.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationRequest
{
    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationSender")
     */
    private CalculationSender $sender;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationRecipient")
     */
    private CalculationRecipient $recipient;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationService")
     */
    private CalculationService $service;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationContent")
     */
    private CalculationContent $content;

    /**
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationPayment")
     */
    private CalculationPayment $payment;

    public function getSender(): CalculationSender
    {
        return $this->sender;
    }

    public function setSender(CalculationSender $sender): void
    {
        $this->sender = $sender;
    }

    public function getRecipient(): CalculationRecipient
    {
        return $this->recipient;
    }

    public function setRecipient(CalculationRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    public function getService(): CalculationService
    {
        return $this->service;
    }

    public function setService(CalculationService $service): void
    {
        $this->service = $service;
    }

    public function getContent(): CalculationContent
    {
        return $this->content;
    }

    public function setContent(CalculationContent $content): void
    {
        $this->content = $content;
    }

    public function getPayment(): CalculationPayment
    {
        return $this->payment;
    }

    public function setPayment(CalculationPayment $payment): void
    {
        $this->payment = $payment;
    }

    public function toArray(): array
    {
        return [
            Property::SENDER->value    => $this->sender->toArray(),
            Property::RECIPIENT->value => $this->recipient->toArray(),
            Property::SERVICE->value   => $this->service->toArray(),
            Property::CONTENT->value   => $this->content->toArray(),
            Property::PAYMENT->value   => $this->payment->toArray(),
        ];
    }
}
