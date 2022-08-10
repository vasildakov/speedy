<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Shipment\ShipmentPhoneNumber;
use VasilDakov\Speedy\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentRecipientTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentRecipientTest extends TestCase
{
    /**
     * @var ShipmentPhoneNumber
     */
    protected ShipmentPhoneNumber $phone1;

    /**
     * @var ShipmentPhoneNumber
     */
    protected ShipmentPhoneNumber $phone2;

    /**
     * @var ShipmentPhoneNumber
     */
    protected ShipmentPhoneNumber $phone3;

    /**
     * @var string
     */
    protected string $clientName;

    /**
     * @var string
     */
    protected string $objectName;

    /**
     * @var string
     */
    protected string $contactName;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var bool
     */
    protected bool $privatePerson;

    /**
     * @var ShipmentAddress
     */
    protected ShipmentAddress $address;

    /**
     * @var int
     */
    protected int $pickupOfficeId;

    /**
     * @return void
     */
    protected function setUp():void
    {
        $this->phone1 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone2 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone3 = $this->createMock(ShipmentPhoneNumber::class);
        $this->clientName = "Client name";
        $this->objectName = "Object name";
        $this->contactName = "Contact name";
        $this->email = "Email";
        $this->privatePerson = false;
        $this->address = $this->createMock(ShipmentAddress::class);
        $this->pickupOfficeId = 4;

        parent::setUp();
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone1():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setPhone1($this->phone1);

        $this->assertEquals($this->phone1, $object->getPhone1());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone2():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setPhone2($this->phone2);

        $this->assertEquals($this->phone2, $object->getPhone2());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone3():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setPhone3($this->phone3);

        $this->assertEquals($this->phone3, $object->getPhone3());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveTheClientName():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setClientName($this->clientName);

        $this->assertEquals($this->clientName, $object->getClientName());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveTheObjectName():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setObjectName($this->clientName);

        $this->assertEquals($this->clientName, $object->getObjectName());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveTheContactName():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setContactName($this->contactName);

        $this->assertEquals($this->contactName, $object->getContactName());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveTheEmail():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setEmail($this->email);

        $this->assertEquals($this->email, $object->getEmail());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePrivatePerson():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setPrivatePerson($this->privatePerson);

        $this->assertEquals($this->privatePerson, $object->getPrivatePerson());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveTheAddress():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setAddress($this->address);

        $this->assertEquals($this->address, $object->getAddress());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePickupOfficeId():void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $object->setPickupOfficeId($this->pickupOfficeId);

        $this->assertEquals($this->pickupOfficeId, $object->getPickupOfficeId());
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $this->assertIsArray($object->toArray());
    }

    public function testExportedArrayHasRequiredKeys() :void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::PHONE_1, $array);
        $this->assertArrayHasKey(Speedy::CLIENT_NAME, $array);
        $this->assertArrayHasKey(Speedy::EMAIL, $array);
//        $this->assertArrayHasKey(Speedy::PHONE_2, $array);
//        $this->assertarrayHasKey(Speedy::PHONE_3, $array);
//        $this->assertArrayHasKey(Speedy::CONTACT_NAME, $array);
//        $this->assertArrayHasKey(Speedy::PRIVATE_PERSON, $array);
//        $this->assertArrayHasKey(Speedy::ADDRESS, $array);
//        $this->assertArrayHasKey(Speedy::PICKUP_OFFICE_ID, $array);
    }

}