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
     * @var string|null
     */
    private ?string $isoAlpha2;

    /**
     * @var string|null
     */
    private ?string $isoAlpha3;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $isoAlpha2
     */
    public function setIsoAlpha2(string $isoAlpha2)
    {
        $this->isoAlpha2 = $isoAlpha2;
    }

    /**
     * @return string|null
     */
    public function getIsoAlpha2(): ?string
    {
        return $this->isoAlpha2;
    }

    /**
     * @param string $isoAlpha3
     */
    public function setIsoAlpha3(string $isoAlpha3)
    {
        $this->isoAlpha3 = $isoAlpha3;
    }

    /**
     * @return string|null
     */
    public function getIsoAlpha3(): ?string
    {
        return $this->isoAlpha3;
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
