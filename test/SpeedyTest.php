<?php

declare(strict_types=1);


namespace VasilDakov\SpeedyTest;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Speedy;

/**
 * Class SpeedyTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class SpeedyTest extends TestCase
{

    protected function setUp(): void
    {
        $this->username = 'speedyUsername';
        $this->password = 'speedyPassword';
        $this->language = 'speedyLanguage';

        parent::setUp();
    }

    /**
     * @group client
     */
    public function testItCanBeInstantiated()
    {
        $client = new Speedy($this->username, $this->password, $this->language);

        $this->assertInstanceOf(Speedy::class, $client);
    }
}
