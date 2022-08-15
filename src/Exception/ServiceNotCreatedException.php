<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Exception;

use RuntimeException as SplRuntimeException;

/**
 * Class FactoryException
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class ServiceNotCreatedException extends SplRuntimeException implements ExceptionInterface
{
}