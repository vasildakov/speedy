<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use Laminas\Hydrator\ClassMethodsHydrator;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\BankAccount;
use VasilDakov\Speedy\Speedy;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class BankAccountTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class BankAccountTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $array = $this->getArray();

        $json = $this->getJson();

        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($json, BankAccount::class, 'json');

        $this->assertInstanceOf(BankAccount::class, $instance);

        $this->assertEquals($array['iban'], $instance->getIban());
        $this->assertEquals($array['accountHolder'], $instance->getAccountHolder());


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

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/BankAccount.json");

        return $json;
    }
}