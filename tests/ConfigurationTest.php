<?php

declare(strict_types=1);

namespace VasilDakov\tests;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Configuration;

/**
 * Class ConfigurationTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class ConfigurationTest extends TestCase
{
    public function testItCanBeConstructed()
    {
        $instance = new Configuration('username', 'password', 'language');

        $this->assertEquals('username', $instance->getUsername());
        $this->assertEquals('password', $instance->getPassword());
        $this->assertEquals('language', $instance->getLanguage());
        $this->assertIsArray($instance->toArray());
    }
}
