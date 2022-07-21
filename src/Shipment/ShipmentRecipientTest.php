<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use PHPUnit\Framework\TestCase;

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
     * @return void
     */
    protected function setUp():void
    {

        parent::setUp();
    }

    /**
     * @return void
     * &group ShipmentRecipient
     */
    public function testItCanRetrieveThePhone1():void
    {
        $object = new ShipmentRecipient();

        $object->setPhone1($this->phone1);

        $this->assertEquals($this->phone1, $object->getPhone1());
    }

}