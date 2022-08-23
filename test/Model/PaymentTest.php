<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use JsonException;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Model\Payment;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Shipment\ShipmentDiscountCardId;

/**
 * Class PaymentTest
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class PaymentTest extends TestCase
{
    public function testItCanSetAndGet(): void
    {
        $serializer = (new SerializerFactory())();

        $instance = $serializer->deserialize($this->getJson(), Payment::class, 'json');
        $this->assertIsObject($instance);

        $json = $serializer->serialize($instance, 'json');
        $this->assertIsString($json);
    }


    public function testCourierServicePayerValidation(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $instance = new Payment();
        $instance->setCourierServicePayer('Invalid Value');
    }


    public function testDeclaredValuePayerValidation(): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Payment())->setDeclaredValuePayer('Invalid Value');
    }

    public function testPackagePayerValidation(): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new Payment())->setPackagePayer('Invalid Value');
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Payment())->toArray());
    }

    private function getJson(): string
    {
        return \file_get_contents("./test/Assets/Payment.json");
    }

    /**
     * @throws JsonException
     */
    private function getArray()
    {
        $json = $this->getJson();

        return \json_decode($json, true, 512,JSON_THROW_ON_ERROR);
    }
}
