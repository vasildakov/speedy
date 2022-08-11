<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Shipment\ShipmentPrice;
use VasilDakov\Speedy\Shipment\ShipmentPriceAmount;


/**
 * Class CreateShipmentResponseTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponseTest extends TestCase
{

    public function testItCanBeConstructed()
    {
        $array = $this->getArray();

        $response = new CreateShipmentResponse();
        $response->setId($array['id']);
        $response->setPickupDate(\DateTime::createFromFormat('Y-m-d', $array['pickupDate']));
        $response->setDeliveryDeadline(new \DateTime($array['deliveryDeadline']));
        $response->setParcels([]);
        $response->setError(null);

        $price = new ShipmentPrice();
        $price->setAmount($array['price']['amount']);

        $response->setPrice($price);

        foreach ($array['price']['details'] as $key => $value) {
            $spa = new ShipmentPriceAmount();
            if (array_key_exists('amount', $value)) {
                $spa->setAmount($value['amount']);
            }
            if (array_key_exists('percent', $value)) {
                $spa->setPercent($value['percent']);
            }
            if (array_key_exists('vatPercent', $value)) {
                $spa->setVatPercent($value['vatPercent']);
            }
            $response->getPrice()->getDetails()->set($key, $spa);
        }

        $this->assertInstanceOf(CreateShipmentResponse::class, $response);
        $this->assertInstanceOf(\DateTime::class, $response->getPickupDate());
        $this->assertInstanceOf(\DateTime::class, $response->getDeliveryDeadline());
        $this->assertEmpty($response->getParcels());
        $this->assertNull($response->getError());
    }



    private function getArray(): array
    {
        $json = $this->getJson();

        return \json_decode($json, true);
    }


    private function getJson(): string
    {
        $json = \file_get_contents("./test/Assets/CreateShipmentResponse.json");

        return $json;
    }
}