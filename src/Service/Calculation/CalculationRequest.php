<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Speedy;

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
     * @var CalculationSender
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationSender")
     */
    private CalculationSender $sender;

    /**
     * @var CalculationRecipient
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationRecipient")
     */
    private CalculationRecipient $recipient;

    /**
     * @var CalculationService
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationService")
     */
    private CalculationService $service;

    /**
     * @var CalculationContent
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationContent")
     */
    private CalculationContent $content;

    /**
     * @var CalculationPayment
     * @Serializer\Type("VasilDakov\Speedy\Service\Calculation\CalculationPayment")
     */
    private CalculationPayment $payment;

    /**
     * @return CalculationSender
     */
    public function getSender(): CalculationSender
    {
        return $this->sender;
    }

    /**
     * @param CalculationSender $sender
     */
    public function setSender(CalculationSender $sender): void
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
     * @return CalculationPayment
     */
    public function getPayment(): CalculationPayment
    {
        return $this->payment;
    }

    /**
     * @param CalculationPayment $payment
     */
    public function setPayment(CalculationPayment $payment): void
    {
        $this->payment = $payment;
    }


    public function toArray(): array
    {
        return [
            Speedy::SENDER    => $this->getSender()->toArray(),
            Speedy::RECIPIENT => $this->getRecipient()->toArray(),
            Speedy::SERVICE   =>  $this->getService()->toArray(),
            Speedy::CONTENT   =>  $this->getContent()->toArray(),
            Speedy::PAYMENT   =>  $this->getPayment()->toArray()
        ];
    }
}
