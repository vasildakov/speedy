<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\ValueObject;

/**
 * Class CountryCode
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class CountryCode
{
    const BGR = 100;
    const ROU = 642;
    const GBR = 826;

    const CODES = [
        self::BGR,
        self::ROU,
        self::GBR,
    ];

    /**
     * Current ISO 3166 country numeric code
     * @var int
     */
    private int $code;
    
    /**
     * @param string $code
     */
    public function __construct(int $code)
    {
        $this->setCode($code);
    }

    /**
     * @todo Implement the logic for checking if $this and $other are equals
     *
     * @param CountryCode $other
     * @return bool
     */
    public function equals(CountryCode $other): bool
    {
        // you can try make it with one line of code
        return $this->getCode() === $other->getCode();
    }
    
    /**
     * @param int $code
     * @return self
     */
    public function setCode(int $code): self
    {
        if (!in_array($code, self::CODES)) {
            throw new \InvalidArgumentException();
        }
        $this->code = $code;

        return $this;
    }
    
    /**
     * @return int code
     */
    public function getCode(): int
    {
        return $this->code;
    }  
}