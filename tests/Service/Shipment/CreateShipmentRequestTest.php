<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Service\Shipment\ShipmentContent;
use VasilDakov\Speedy\Service\Shipment\ShipmentPayment;
use VasilDakov\Speedy\Service\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Service\Shipment\ShipmentSender;
use VasilDakov\Speedy\Service\Shipment\ShipmentService;
use VasilDakov\Speedy\Speedy;

/**
 * Class CreateShipmentRequestTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class CreateShipmentRequestTest extends TestCase
{
    protected ShipmentRecipient $recipient;

    protected ShipmentService $service;

    protected ShipmentContent $content;

    protected ShipmentPayment $payment;

    protected ShipmentSender $sender;

    protected string $shipmentNote;

    protected string $ref1;

    protected string $ref2;

    protected string $consolidationRef;

    protected bool $requireUnsuccessfulDeliveryStickerImage;

    protected function setUp(): void
    {
        $this->sender = $this->createMock(ShipmentSender::class);
        $this->recipient = $this->createMock(ShipmentRecipient::class);
        $this->service = $this->createMock(ShipmentService::class);
        $this->content = $this->createMock(ShipmentContent::class);
        $this->payment = $this->createMock(ShipmentPayment::class);
        $this->shipmentNote = 'Shipment Note';

        $this->ref1 = '10';
        $this->ref2 = '20';

        $this->consolidationRef = 'Consolidation Text';
        $this->requireUnsuccessfulDeliveryStickerImage = true;

        parent::setUp();
    }

    private function getInstance(): CreateShipmentRequest
    {
        return new CreateShipmentRequest(
            $this->sender,
            $this->recipient,
            $this->service,
            $this->content,
            $this->payment,
            $this->ref1
        );
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanBeCreated(): void
    {
        $object = $this->getInstance();

        $this->assertInstanceOf(CreateShipmentRequest::class, $object);
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRecipient(): void
    {
        $object = $this->getInstance();

        $this->assertEquals($this->recipient, $object->getRecipient());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheService(): void
    {
        $object = $this->getInstance();

        $this->assertEquals($this->service, $object->getService());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheContent(): void
    {
        $object = $this->getInstance();

        $this->assertEquals($this->content, $object->getContent());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveThePayment(): void
    {
        $object = $this->getInstance();

        $this->assertEquals($this->payment, $object->getPayment());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheSender(): void
    {
        $object = $this->getInstance();

        $object->setSender($this->sender);

        $this->assertEquals($this->sender, $object->getSender());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheShipmentNote(): void
    {
        $object = $this->getInstance();

        $object->setShipmentNote($this->shipmentNote);

        $this->assertEquals($this->shipmentNote, $object->getShipmentNote());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef1(): void
    {
        $object = $this->getInstance();

        $object->setRef1($this->ref1);

        $this->assertEquals($this->ref1, $object->getRef1());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef2(): void
    {
        $object = $this->getInstance();

        $object->setRef2($this->ref2);

        $this->assertEquals($this->ref2, $object->getRef2());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheConsolidationRef(): void
    {
        $object = $this->getInstance();

        $object->setConsolidationRef($this->consolidationRef);

        $this->assertEquals($this->consolidationRef, $object->getConsolidationRef());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRequireUnsuccessfulDeliveryStickerImage(): void
    {
        $object = $this->getInstance();

        $object->setRequireUnsuccessfulDeliveryStickerImage($this->requireUnsuccessfulDeliveryStickerImage);

        $this->assertEquals(
            $this->requireUnsuccessfulDeliveryStickerImage,
            $object->getRequireUnsuccessfulDeliveryStickerImage()
        );
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testItCanBeConvertedToArray(): void
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, CreateShipmentRequest::class, 'json');

        $this->assertIsArray($instance->toArray());
    }

    /**
     * @group CreateShipmentRequest
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = $this->getInstance();

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::SENDER, $array);
        $this->assertArrayHasKey(Speedy::RECIPIENT, $array);
        $this->assertArrayHasKey(Speedy::SERVICE, $array);
        $this->assertArrayHasKey(Speedy::CONTENT, $array);
        $this->assertArrayHasKey(Speedy::PAYMENT, $array);
        // $this->assertArrayHasKey(Speedy::SHIPMENT_NOTE, $array);
        // $this->assertArrayHasKey(Speedy::REF_1, $array);
        // $this->assertArrayHasKey(Speedy::REF_2, $array);
    }

    public function testItCanBeDeserialized(): void
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, CreateShipmentRequest::class, 'json');

        $this->assertInstanceOf(CreateShipmentRequest::class, $instance);
        $this->assertInstanceOf(ShipmentContent::class, $instance->getContent());
        $this->assertInstanceOf(ShipmentPayment::class, $instance->getPayment());
        $this->assertInstanceOf(ShipmentRecipient::class, $instance->getRecipient());
        $this->assertInstanceOf(ShipmentAddress::class, $instance->getRecipient()->getAddress());

        $this->assertEquals(2002, $instance->getService()->getServiceId());
        $this->assertEquals(1, $instance->getContent()->getParcelsCount());
        $this->assertEquals(20.0, $instance->getContent()->getTotalWeight());
        $this->assertEquals('FURNITURE', $instance->getContent()->getContents());
        $this->assertEquals('BOX', $instance->getContent()->getPackage());
        $this->assertEquals('Sofia', $instance->getRecipient()->getAddress()->getSiteName());
        $this->assertEquals('Vitosha Blvd', $instance->getRecipient()->getAddress()->getStreetName());
    }

    private function getArray(): array
    {
        return \json_decode($this->getJson(), true);
    }

    private function getJson(): string
    {
        return \file_get_contents(
            './tests/Assets/CreateShipmentRequest.json'
        );
    }
}
