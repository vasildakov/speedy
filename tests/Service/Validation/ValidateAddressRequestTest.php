<?php

namespace VasilDakov\SpeedyTests\Service\Validation;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\ShipmentAddress;
use VasilDakov\Speedy\Service\Validation\ValidateAddressRequest;

final class ValidateAddressRequestTest extends TestCase
{
    private ShipmentAddress $address;

    protected function setUp(): void
    {
        $this->address = $this->createMock(ShipmentAddress::class);
        parent::setUp();
    }

    public function testItCanBeConstructed(): void
    {
        $request = new ValidateAddressRequest($this->address);

        self::assertInstanceOf(ValidateAddressRequest::class, $request);
    }
}
