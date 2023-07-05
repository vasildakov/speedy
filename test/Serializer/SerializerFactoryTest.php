<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Serializer;

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Exception\ServiceNotCreatedException;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class SerializerFactoryTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class SerializerFactoryTest extends TestCase
{
    public function testItReturnInstance()
    {
        $instance = (new SerializerFactory())();

        $this->assertInstanceOf(Serializer::class, $instance);
    }
}