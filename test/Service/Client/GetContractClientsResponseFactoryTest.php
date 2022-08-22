<?php declare(strict_types=1);

namespace VasilDakov\SpeedyTest\Service\Client;

use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponseFactory;


/**
 * Class GetContractClientsResponseFactoryTest
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class GetContractClientsResponseFactoryTest extends TestCase
{
    public function testItThrowsAnExceptionForInvalidJson()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid or malformed JSON');

        (new GetContractClientsResponseFactory())("{invalid json}");
    }
}