<?php

namespace VasilDakov\SpeedyTests\Service\Validation;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Validation\ValidatePhoneRequest;

final class ValidatePhoneRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $request = new ValidatePhoneRequest('0888112233', '123');

        self::assertInstanceOf(ValidatePhoneRequest::class, $request);
        self::assertEquals('0888112233', $request->getNumber());
        self::assertEquals('123', $request->getExt());
    }
}
