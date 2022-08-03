<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\BankAccount;
use VasilDakov\Speedy\Shipment\Payer;
use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;
use VasilDakov\Speedy\Shipment\ShipmentPayment;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentPaymentTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class ShipmentPaymentTest extends TestCase
{
    /**
     * @var Payer
     */
    protected Payer $payer;

    /**
     * @var int
     */
    protected int $thirdParty;

    /**
     * @var ShipmentDiscountCardId
     */
    protected ShipmentDiscountCardId $discount;

    /**
     * @var BankAccount
     */
    protected BankAccount $account;

    protected function setUp(): void
    {
        $this->payer = $this->createMock(Payer::class);

        $this->thirdParty = 10;
        $this->discount = $this->createMock(ShipmentDiscountCardId::class);
        $this->account = $this->createMock(BankAccount::class);

        parent::setUp();
    }

    /**
     * @return void
     */
    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentPayment($this->payer);

        $array = $object->toArray();

        $this->arrayHasKey(Speedy::COURIER_SERVICE_PAYER, $array);
    }

    /**
     * @return void
     */
    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentPayment($this->payer);

        $object->setDeclaredValuePayer($this->payer);
        $object->setPackagePayer($this->payer);
        $object->setThirdPartyClientId($this->thirdParty);
        $object->setDiscountCardId($this->discount);
        $object->setSenderBankAccount($this->account);

        $array = $object->toArray();

        $this->arrayHasKey(Speedy::DECLARED_VALUE_PAYER, $array);
        $this->arrayHasKey(Speedy::PACKAGE_PAYER, $array);
        $this->arrayHasKey(Speedy::THIRD_PARTY_CLIENT_ID, $array);
        $this->arrayHasKey(Speedy::DISCOUNT_CARD_ID, $array);
        $this->arrayHasKey(Speedy::SENDER_BANK_ACCOUNT, $array);

    }


}
