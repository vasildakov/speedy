<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Serializer\SerializerFactory;

use function json_decode;
use function file_get_contents;

/**
 * Class BankAccountTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class BankAccountTest extends TestCase
{
    protected string $iban;

    protected string $accountHolder;

    protected function setUp(): void
    {
        $this->iban = 'Iban';
        $this->accountHolder = 'Holder';

        parent::setUp();
    }

    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, BankAccount::class, 'json');

        $this->assertInstanceOf(BankAccount::class, $instance);

        $this->assertEquals($array['iban'], $instance->getIban());
        $this->assertEquals($array['accountHolder'], $instance->getAccountHolder());

        $this->assertIsArray($instance->toArray());
    }

    public function testItCanBeCreated(): void
    {
        $object = new BankAccount($this->iban, $this->accountHolder);

        $this->assertInstanceOf(BankAccount::class, $object);
    }

    /**
     * @group model
     */
    public function testItCanBeDeserialized(): void
    {
        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, BankAccount::class, 'json');

        $this->assertInstanceOf(BankAccount::class, $instance);
    }

    private function getArray(): array
    {
        $json = $this->getJson();

        return json_decode($json, true);
    }

    private function getJson(): string
    {
        return file_get_contents("./test/Assets/BankAccount.json");
    }
}
