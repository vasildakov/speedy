<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Error;

/**
 * Class CalculationResponse.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CalculationResponse
{
    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\CalculationResult>")
     */
    private ArrayCollection $calculations;

    private ?Error $error = null;

    public function __construct()
    {
        $this->calculations = new ArrayCollection();
    }

    public function setCalculations(ArrayCollection $calculations): void
    {
        $this->calculations = $calculations;
    }

    public function getCalculations(): ArrayCollection
    {
        return $this->calculations;
    }

    public function getError(): ?Error
    {
        return $this->error;
    }
}
