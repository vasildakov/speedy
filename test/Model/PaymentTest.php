<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use JsonException;
use PHPUnit\Framework\TestCase;
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