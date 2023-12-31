<?php

namespace VasilDakov\tests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentRequest;

final class CancelShipmentRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $req = new CancelShipmentRequest('shipmentId', 'comment');

        self::assertInstanceOf(CancelShipmentRequest::class, $req);

        self::assertEquals('shipmentId', $req->getShipmentId());

        self::assertEquals('comment', $req->getComment());
    }
}
