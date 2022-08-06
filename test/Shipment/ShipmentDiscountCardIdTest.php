<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;

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

    protected function setUp(): void
    {
        $this->contractId = 22;
        $this->cardId     = 23;

        parent::setUp();
    }

    public function testItCanBeCreated(): void
    {
        $object = new ShipmentDiscountCardId($this->contractId, $this->cardId);
        $this->assertInstanceOf(ShipmentDiscountCardId::class, $object);
    }
}