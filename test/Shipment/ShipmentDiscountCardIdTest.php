<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentDiscountCardIdTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentDiscountCardIdTest extends TestCase
{
    /**
     * @var int
     */
    protected int $contractId;

    /**
     * @var int
     */
    protected int $cardId;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->contractId = 22;
        $this->cardId     = 23;

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testItCanBeCreated(): void
    {
        $object = new ShipmentDiscountCardId($this->contractId, $this->cardId);
        $this->assertInstanceOf(ShipmentDiscountCardId::class, $object);
    }

    /**
     * @return void
     */
    public function testItCanRetrieveTheContactId(): void
    {
        $object = new ShipmentDiscountCardId($this->contractId, $this->cardId);

        $this->assertEquals($this->contractId, $object->getContractId());
    }

    /**
     * @return void
     */
    public function testItCanRetrieveTheCardId(): void
    {
        $object = new ShipmentDiscountCardId($this->cardId, $this->cardId);

        $this->assertEquals($this->cardId, $object->getCardId());
    }

    /**
     * @return void
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new ShipmentDiscountCardId($this->cardId, $this->cardId);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::CONTRACT_ID, $array);
        $this->assertArrayHasKey(Speedy::CARD_ID, $array);
    }
}
