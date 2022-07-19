<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Shipment\ShipmentContent;
use VasilDakov\Speedy\Shipment\ShipmentPayment;
use VasilDakov\Speedy\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Shipment\ShipmentSender;
use VasilDakov\Speedy\Shipment\ShipmentService;

/**
 * Class CreateShipmentRequestTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CreateShipmentRequestTest extends TestCase
{
    /**
     * @var ShipmentRecipient
     */
    protected ShipmentRecipient $recipient;

    /**
     * @var ShipmentService
     */
    protected ShipmentService $service;

    /**
     * @var ShipmentContent
     */
    protected ShipmentContent $content;

    /**
     * @var ShipmentPayment
     */
    protected ShipmentPayment $payment;

    /**
     * @var ShipmentSender
     */
    protected ShipmentSender $sender;

    /**
     * @return void
     */
    protected function setUp():void
    {
        $this->recipient = $this->createMock(ShipmentRecipient::class);
        $this->service = $this->createMock(ShipmentService::class);
        $this->content = $this->createMock(ShipmentContent::class);
        $this->payment = $this->createMock(ShipmentPayment::class);

        parent::setUp();

    }

    /**
     * @return void
     */
    public function testItCanBeCreated() :void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertInstanceOf(CreateShipmentRequest::class, $object);
    }

}