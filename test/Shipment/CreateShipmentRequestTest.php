<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use JMS\Serializer;
use JMS\Serializer\SerializationContext;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Shipment\ShipmentContent;
use VasilDakov\Speedy\Shipment\ShipmentPayment;
use VasilDakov\Speedy\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Shipment\ShipmentSender;
use VasilDakov\Speedy\Shipment\ShipmentService;
use VasilDakov\Speedy\Speedy;

/**
 * Class CreateShipmentRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
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

    /**
     * @return void
     */
    protected function setUp():void
    {
        $this->sender    = $this->createMock(ShipmentSender::class);
        $this->recipient = $this->createMock(ShipmentRecipient::class);
        $this->service   = $this->createMock(ShipmentService::class);
        $this->content   = $this->createMock(ShipmentContent::class);
        $this->payment   = $this->createMock(ShipmentPayment::class);
        $this->shipmentNote = "Shipment Note";

        $this->ref1 = "10";
        $this->ref2 = "20";

        $this->consolidationRef = "Consolidation Text";
        $this->requireUnsuccessfulDeliveryStickerImage = true;

        parent::setUp();

    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanBeCreated() :void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertInstanceOf(CreateShipmentRequest::class, $object);
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRecipient():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->recipient, $object->getRecipient());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheService():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->service, $object->getService());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheContent():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->content, $object->getContent());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveThePayment():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertEquals($this->payment, $object->getPayment());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheSender():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setSender($this->sender);

        $this->assertEquals($this->sender, $object->getSender());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheShipmentNote():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setShipmentNote($this->shipmentNote);

        $this->assertEquals($this->shipmentNote, $object->getShipmentNote());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef1():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setRef1($this->ref1);

        $this->assertEquals($this->ref1, $object->getRef1());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRef2():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setRef2($this->ref2);

        $this->assertEquals($this->ref2, $object->getRef2());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheConsolidationRef():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setConsolidationRef($this->consolidationRef);

        $this->assertEquals($this->consolidationRef, $object->getConsolidationRef());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanRetrieveTheRequireUnsuccessfulDeliveryStickerImage():void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $object->setRequireUnsuccessfulDeliveryStickerImage($this->requireUnsuccessfulDeliveryStickerImage);

        $this->assertEquals($this->requireUnsuccessfulDeliveryStickerImage, $object->getRequireUnsuccessfulDeliveryStickerImage());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $this->assertIsArray($object->toArray());
    }

    /**
     * @return void
     * @group CreateShipmentRequest
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new CreateShipmentRequest($this->sender, $this->recipient, $this->service, $this->content, $this->payment);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::SENDER, $array);
        $this->assertArrayHasKey(Speedy::RECIPIENT, $array);
        $this->assertArrayHasKey(Speedy::SERVICE, $array);
        $this->assertArrayHasKey(Speedy::CONTENT, $array);
        $this->assertArrayHasKey(Speedy::PAYMENT, $array);
        //$this->assertArrayHasKey(Speedy::SHIPMENT_NOTE, $array);
        //$this->assertArrayHasKey(Speedy::REF_1, $array);
        //$this->assertArrayHasKey(Speedy::REF_2, $array);
    }

    public function testItCanBeDeserialized()
    {
        $json = $this->getJson();

        $serializer = Serializer\SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new Serializer\Naming\SerializedNameAnnotationStrategy(
                    new Serializer\Naming\IdenticalPropertyNamingStrategy()
                )
            )
            ->build();

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
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        return \file_get_contents(
            "./test/Assets/CreateShipmentRequest.json"
        );
    }
}