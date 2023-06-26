<?php

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Model;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Model\Email;

/**
 * Class EmailTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class EmailTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $email = new Email('vasildakov@gmail.com');
        $this->assertInstanceOf(Email::class, $email);
    }

    public function testItThrowsInvalidArgumentException()
    {
        $this->expectException(\InvalidArgumentException::class);

        $email = new Email('vasildakov@gmail');
    }

    public function testItCanCompareWithOtherEmail()
    {
        $email = new Email('vasildakov@gmail.com');

        $this->assertFalse($email->equals(new Email('vasil.dakov@gmail.com')));
        $this->assertTrue($email->equals(new Email('vasildakov@gmail.com')));
    }

    public function testItCanBeConvertedToString()
    {
        $email = new Email('vasildakov@gmail.com');

        $this->assertIsString((string)$email);
    }

    public function testItCanBeJsonSerialized()
    {
        $email = new Email('vasildakov@gmail.com');

        $this->assertIsString(\json_encode($email, JSON_PRETTY_PRINT));
    }

    public function testItCanBeExportedToArray(): void
    {
        $this->assertIsArray((new Email('vasildakov@gmail.com'))->toArray());
    }
}
