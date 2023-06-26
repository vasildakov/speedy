<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Shipment;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Shipment\CreateShipmentResponseFactory;
use VasilDakov\Speedy\Shipment\ShipmentPrice;
use VasilDakov\Speedy\Shipment\ShipmentPriceAmount;

use function file_get_contents;

/**
 * Class CreateShipmentResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CreateShipmentResponseFactoryTest extends TestCase
{
    public function testItCanCreateInstance(): void
    {
        $json = $this->getJson();

        $instance = (new CreateShipmentResponseFactory())($json);
        $this->assertInstanceOf(CreateShipmentResponse::class, $instance);
    }

    public function testInstanceHasRequiredProperties(): void
    {
        $json = $this->getJson();

        $instance = (new CreateShipmentResponseFactory())($json);

        $this->assertInstanceOf(ShipmentPrice::class, $instance->getPrice());
        $this->assertInstanceOf(ArrayCollection::class, $instance->getPrice()->getDetails());
        $this->assertInstanceOf(ArrayCollection::class, $instance->getPrice()->getDetailsLocal());
        $this->assertInstanceOf(ShipmentPriceAmount::class, $instance->getPrice()->getDetails()->get('netAmount'));
        $this->assertInstanceOf(ShipmentPriceAmount::class, $instance->getPrice()->getDetailsLocal()->get('netAmount'));
    }

    private function getJson(): string
    {
        return file_get_contents("./test/Assets/CreateShipmentResponse.json");
    }
}
