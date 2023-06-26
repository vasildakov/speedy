<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Calculation;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Model\CalculationResult>")
     */
    private ArrayCollection $calculations;

    /**
     * @var Error|null
     */
    private ?Error $error = null;

    public function __construct()
    {
        $this->calculations = new ArrayCollection();
    }

    /**
     * @param ArrayCollection $calculations
     */
    public function setCalculations(ArrayCollection $calculations): void
    {
        $this->calculations = $calculations;
    }

    /**
     * @return ArrayCollection
     */
    public function getCalculations(): ArrayCollection
    {
        return $this->calculations;
    }

    /**
     * @return Error|null
     */
    public function getError(): ?Error
    {
        return $this->error;
    }
}
