<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use VasilDakov\Speedy\Error;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CalculationResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CalculationResponse
{
    /**
     * Calculations for all service ids in request
     *
     * @var CalculationResult[]
     */
    private array $calculations;

    /**
     * @var Error
     */
    private Error $error;
}
