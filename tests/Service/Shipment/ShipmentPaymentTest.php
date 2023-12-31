<?php

declare(strict_types=1);

namespace VasilDakov\tests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Service\Shipment\ShipmentDiscountCardId;
use VasilDakov\Speedy\Service\Shipment\ShipmentPayment;
use VasilDakov\Speedy\Speedy;

/**
 * Class ShipmentPaymentTest.
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class ShipmentPaymentTest extends TestCase
{
    protected string $payer;

    protected int $thirdParty;

    protected ShipmentDiscountCardId $discount;

    protected BankAccount $account;

    protected function setUp(): void
    {
        $this->payer = 'RECIPIENT';

        $this->thirdParty = 10;
        $this->discount = $this->createMock(ShipmentDiscountCardId::class);
        $this->account = $this->createMock(BankAccount::class);

        parent::setUp();
    }

    public function testItCanExportToArrayWithMandatoryProperty(): void
    {
        $object = new ShipmentPayment('RECIPIENT', 'RECIPIENT');

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::COURIER_SERVICE_PAYER, $array);
    }

    public function testItCanExportToArrayWithOptionalProperty(): void
    {
        $object = new ShipmentPayment('RECIPIENT', 'RECIPIENT');

        $object->setDeclaredValuePayer('THIRD_PARTY');
        $object->setPackagePayer('SENDER');
        $object->setThirdPartyClientId($this->thirdParty);
        $object->setDiscountCardId($this->discount);
        $object->setSenderBankAccount($this->account);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::DECLARED_VALUE_PAYER, $array);
        // $this->assertArrayHasKey(Speedy::PACKAGE_PAYER, $array);
        // $this->assertArrayHasKey(Speedy::THIRD_PARTY_CLIENT_ID, $array);
        // $this->assertArrayHasKey(Speedy::DISCOUNT_CARD_ID, $array);
        // $this->assertArrayHasKey(Speedy::SENDER_BANK_ACCOUNT, $array);
    }
}
