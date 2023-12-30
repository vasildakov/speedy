<?php

namespace VasilDakov\SpeedyTest\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentRequest;

final class CancelShipmentRequestTest extends TestCase
{
    /**
     * @test
     */
    public function itCanBeConstructed(): void
    {
        $req = new CancelShipmentRequest('shipmentId', 'comment');

        self::assertInstanceOf(CancelShipmentRequest::class, $req);

        self::assertEquals('shipmentId', $req->getShipmentId());

        self::assertEquals('comment', $req->getComment());
    }
}
