<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\BankAccount;
use VasilDakov\Speedy\Speedy;

/**
 * Class BankAccountTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class BankAccountTest extends TestCase
{
    /**
     * @var string
     */
    protected string $iban;

    /**
     * @var string
     */
    protected string $accountHolder;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->iban   = 'iban';
        $this->accountHolder = 'accountHolder';
        parent::setUp();
    }

    /**
     * @return void
     */
    public function testItCanBeCreated() :void
    {
        $object = new BankAccount($this->iban, $this->accountHolder);

        $this->assertInstanceOf(BankAccount::class, $object);
    }

    /**
     * @return void
     */
    public function testCanRetrieveTheIban():void
    {
        $object = new BankAccount($this->iban, $this->accountHolder);

        $this->assertEquals($this->iban, $object->getIban());
    }

    /**
     * @return void
     */
    public function testCanRetrieveTheAccountHolder():void
    {
        $object = new BankAccount($this->iban, $this->accountHolder);

        $this->assertEquals($this->accountHolder, $object->getAccountHolder());
    }

    /**
     * @return void
     */
    public function testExportedArrayHasRequiredKeys(): void
    {
        $object = new BankAccount($this->iban, $this->accountHolder);

        $array = $object->toArray();

        $this->assertArrayHasKey(Speedy::IBAN, $array);
        $this->assertArrayHasKey(Speedy::ACCOUNT_HOLDER, $array);
    }
}