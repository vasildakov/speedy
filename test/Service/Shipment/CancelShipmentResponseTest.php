<?php

namespace VasilDakov\SpeedyTest\Service\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Error;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentResponse;

final class CancelShipmentResponseTest extends TestCase
{
    /**
     * @test
     */
    public function itCanBeConstructed(): void
    {
        $res = new CancelShipmentResponse();

        self::assertInstanceOf(CancelShipmentResponse::class, $res);
    }

    /**
     * @test
     */
    public function itCanBeConstructedWithError(): void
    {
        $res = new CancelShipmentResponse();
        $res->setError(new Error());

        self::assertInstanceOf(CancelShipmentResponse::class, $res);
        self::assertInstanceOf(Error::class, $res->getError());
    }
}