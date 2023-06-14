<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Shipment\ShipmentPhoneNumber;
use VasilDakov\Speedy\Shipment\ShipmentSender;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentSenderTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentSenderTest extends TestCase
{
    protected ShipmentPhoneNumber $phone1;

    protected ShipmentPhoneNumber $phone2;

    protected ShipmentPhoneNumber $phone3;

    protected string $clientName;

    protected string $contactName;

    protected string $email;

    protected bool $privatePerson = false;

    protected ShipmentAddress $address;

    protected int $dropoffOfficeId;

    protected int $pickupOfficeId;

    protected function setUp():void
    {
        $this->phone1 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone2 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone3 = $this->createMock(ShipmentPhoneNumber::class);
        $this->clientName = "Client name";
        $this->contactName = "Contact name";
        $this->email = "Email";
        $this->privatePerson = false;
        $this->address = $this->createMock(ShipmentAddress::class);
        $this->pickupOfficeId = 4;

        parent::setUp();
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanBeCreated() :void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $this->assertInstanceOf(ShipmentSender::class, $object);
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveThePhone1():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setPhone1($this->phone1);

        $this->assertEquals($this->phone1, $object->getPhone1());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveThePhone2():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setPhone2($this->phone2);

        $this->assertEquals($this->phone2, $object->getPhone2());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveThePhone3():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setPhone3($this->phone3);

        $this->assertEquals($this->phone3, $object->getPhone3());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveTheClientName():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setClientName($this->clientName);

        $this->assertEquals($this->clientName, $object->getClientName());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveTheContactName():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setContactName($this->contactName);

        $this->assertEquals($this->contactName, $object->getContactName());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveTheEmail():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setEmail($this->email);

        $this->assertEquals($this->email, $object->getEmail());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveThePrivatePerson():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setPrivatePerson($this->privatePerson);

        $this->assertEquals($this->privatePerson, $object->isPrivatePerson());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveTheAddress():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setAddress($this->address);

        $this->assertEquals($this->address, $object->getAddress());
    }

    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanRetrieveThePickupOfficeId():void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $object->setDropoffOfficeId($this->pickupOfficeId);

        $this->assertEquals($this->pickupOfficeId, $object->getDropoffOfficeId());
    }
    /**
     * @return void
     * @group ShipmentSender
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $this->assertIsArray($object->toArray());
    }

    public function testExportedArrayHasRequiredKeys() :void
    {
        $object = new ShipmentSender($this->phone1, $this->clientName, $this->email);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::PHONE_1, $array);
        $this->assertArrayHasKey(Speedy::CLIENT_NAME, $array);
        $this->assertArrayHasKey(Speedy::EMAIL, $array);
    }
}

