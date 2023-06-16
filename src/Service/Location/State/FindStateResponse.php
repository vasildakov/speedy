<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Location\State;

/**
 * Class FindStateResponse
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
readonly class FindStateResponse
{
    public array $states;

    public function __construct(array $states)
    {
        $this->states = $states;
    }
}
