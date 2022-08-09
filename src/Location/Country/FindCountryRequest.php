<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Location\Country;

/**
 * Class FindCountry
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class FindCountryRequest
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $isoAlpha2;

    /**
     * @var string
     */
    private string $isoAlpha3;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
