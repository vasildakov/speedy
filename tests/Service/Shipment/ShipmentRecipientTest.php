<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Service\Shipment\ShipmentPhoneNumber;
use VasilDakov\Speedy\Service\Shipment\ShipmentRecipient;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentRecipientTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentRecipientTest extends TestCase
{
    protected ShipmentPhoneNumber $phone1;

    protected ShipmentPhoneNumber $phone2;

    protected ShipmentPhoneNumber $phone3;

    protected string $clientName;

    protected string $objectName;

    protected string $contactName;

    protected string $email;

    protected bool $privatePerson;

    protected ShipmentAddress $address;

    protected int $pickupOfficeId;

    protected function setUp(): void
    {
        $this->phone1 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone2 = $this->createMock(ShipmentPhoneNumber::class);
        $this->phone3 = $this->createMock(ShipmentPhoneNumber::class);
        $this->address = $this->createMock(ShipmentAddress::class);

        $this->clientName = 'Client name';
        $this->objectName = 'Object name';
        $this->contactName = 'Contact name';
        $this->email = 'Email';
        $this->privatePerson = false;
        $this->pickupOfficeId = 4;

        parent::setUp();
    }

    private function getShipmentRecipient(): ShipmentRecipient
    {
        return new ShipmentRecipient($this->phone1, $this->clientName, $this->email);
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone1(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setPhone1($this->phone1);

        $this->assertEquals($this->phone1, $object->getPhone1());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone2(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setPhone2($this->phone2);

        $this->assertEquals($this->phone2, $object->getPhone2());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone3(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setPhone3($this->phone3);

        $this->assertEquals($this->phone3, $object->getPhone3());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveTheClientName(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setClientName($this->clientName);

        $this->assertEquals($this->clientName, $object->getClientName());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveTheObjectName(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setObjectName($this->clientName);

        $this->assertEquals($this->clientName, $object->getObjectName());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveTheContactName(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setContactName($this->contactName);

        $this->assertEquals($this->contactName, $object->getContactName());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveTheEmail(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setEmail($this->email);

        $this->assertEquals($this->email, $object->getEmail());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveThePrivatePerson(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setPrivatePerson($this->privatePerson);

        $this->assertEquals($this->privatePerson, $object->getPrivatePerson());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveTheAddress(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setAddress($this->address);

        $this->assertEquals($this->address, $object->getAddress());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanRetrieveThePickupOfficeId(): void
    {
        $object = $this->getShipmentRecipient();

        $object->setPickupOfficeId($this->pickupOfficeId);

        $this->assertEquals($this->pickupOfficeId, $object->getPickupOfficeId());
    }

    /**
     * @return void
     *              &group ShipmentRecipient
     */
    public function testItCanBeConvertedAsArray(): void
    {
        $object = $this->getShipmentRecipient();

        $this->assertIsArray($object->toArray());
    }

    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new ShipmentRecipient($this->phone1, $this->clientName, $this->email);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::PHONE_1, $array);
        $this->assertArrayHasKey(Speedy::CLIENT_NAME, $array);
        $this->assertArrayHasKey(Speedy::EMAIL, $array);
        //        $this->assertArrayHasKey(Speedy::PHONE_2, $array);
        //        $this->assertArrayHasKey(Speedy::PHONE_3, $array);
        //        $this->assertArrayHasKey(Speedy::CONTACT_NAME, $array);
        //        $this->assertArrayHasKey(Speedy::PRIVATE_PERSON, $array);
        //        $this->assertArrayHasKey(Speedy::ADDRESS, $array);
        //        $this->assertArrayHasKey(Speedy::PICKUP_OFFICE_ID, $array);
    }
}
