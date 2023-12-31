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

namespace VasilDakov\tests\Service\Location\State;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Service\Location\State\FindStateResponseFactory;

/**
 * Class FindStateResponseFactory.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class FindStateResponseFactoryTest extends TestCase
{
    public function testItThrowsAnExceptionForInvalidJson(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid or malformed JSON');

        (new FindStateResponseFactory())('{invalid json or malformed json}');
    }
}
