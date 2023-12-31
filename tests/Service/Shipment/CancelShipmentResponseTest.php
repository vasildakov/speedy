<?php

namespace VasilDakov\tests\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentResponse;

final class CancelShipmentResponseTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $res = new CancelShipmentResponse();

        self::assertInstanceOf(CancelShipmentResponse::class, $res);
    }

    public function testItCanBeConstructedWithError(): void
    {
        $res = new CancelShipmentResponse();
        $res->setError(new Error());

        self::assertInstanceOf(CancelShipmentResponse::class, $res);
        self::assertInstanceOf(Error::class, $res->getError());
    }
}
