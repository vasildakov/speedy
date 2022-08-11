<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest\Shipment;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Shipment\Payer;

/**
 * Class PayerTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class PayerTest extends TestCase
{
    public function testItCanBeConstructedWithValidArgument()
    {
        $instance = new Payer('SENDER');

        $this->assertInstanceOf(Payer::class, $instance);
    }

    public function testItThrowsAnExceptionForInvalidArgument()
    {
        $this->expectException(\InvalidArgumentException::class);
        $instance = new Payer('INVALID');
    }

    public function testItCanBeConvertedToString()
    {
        $instance = new Payer('SENDER');

        $this->assertEquals('SENDER', (string)$instance);
    }
}