<?php

namespace VasilDakov\SpeedyTests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentRequest;

final class CancelShipmentRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $request = new CancelShipmentRequest('shipmentId', 'comment');

        self::assertInstanceOf(CancelShipmentRequest::class, $request);
        self::assertEquals('shipmentId', $request->getShipmentId());
        self::assertEquals('comment', $request->getComment());
    }
}
