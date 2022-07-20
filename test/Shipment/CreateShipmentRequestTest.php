<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;
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
        $this->sender = $this->createMock(ShipmentSender::class);
        $this->shipmentNote = "Shipment Note";
        $this->ref1 = "10";
        $this->ref2 = "20";
        $this->consolidationRef = "Consolidation Text";
        $this->requireUnsuccessfulDeliveryStickerImage = True;

        parent::setUp();

    }

    /**
     * @return void
     * * &group CreateShipmentRequest
     */
    public function testItCanBeCreated() :void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertInstanceOf(CreateShipmentRequest::class, $object);
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRecipient():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->recipient, $object->getRecipient());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheService():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->service, $object->getService());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheContent():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->content, $object->getContent());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveThePayment():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->payment, $object->getPayment());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheSender():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setSender($this->sender);

        $this->assertEquals($this->sender, $object->getSender());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheShipmentNote():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setShipmentNote($this->shipmentNote);

        $this->assertEquals($this->shipmentNote, $object->getShipmentNote());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef1():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setRef1($this->ref1);

        $this->assertEquals($this->ref1, $object->getRef1());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef2():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setRef2($this->ref2);

        $this->assertEquals($this->ref2, $object->getRef2());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheConsolidationRef():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setConsolidationRef($this->consolidationRef);

        $this->assertEquals($this->consolidationRef, $object->getConsolidationRef());
    }

    /**
     * @return void
     * &group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRequireUnsuccessfulDeliveryStickerImage():void
    {
        $object = new CreateShipmentRequest($this->recipient, $this->service, $this->content, $this->payment);

        $object->setRequireUnsuccessfulDeliveryStickerImage($this->requireUnsuccessfulDeliveryStickerImage);

        $this->assertEquals($this->requireUnsuccessfulDeliveryStickerImage, $object->getRequireUnsuccessfulDeliveryStickerImage());
    }

}