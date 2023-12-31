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

namespace VasilDakov\tests;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Error;

/**
 * Class ErrorTest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class ErrorTest extends TestCase
{
    public function testAccessors(): void
    {
        $error = new Error();
        $error->setId('111');
        $error->setCode(888);
        $error->setMessage('Message');
        $error->setComponent('Component');
        $error->setContext('Context');

        $this->assertEquals('111', $error->getId());
        $this->assertEquals(888, $error->getCode());
        $this->assertEquals('Message', $error->getMessage());
        $this->assertEquals('Component', $error->getComponent());
        $this->assertEquals('Context', $error->getContext());
    }
}
