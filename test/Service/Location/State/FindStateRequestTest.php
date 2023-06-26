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

namespace VasilDakov\SpeedyTest\Service\Location\State;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;

/**
 * Class FindStateRequestTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 */
class FindStateRequestTest extends TestCase
{
    public function testItCanBeConstructed(): void
    {
        $instance = new FindStateRequest(100, 'State');

        $this->assertInstanceOf(FindStateRequest::class, $instance);
    }
}