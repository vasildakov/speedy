<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class CountryCode.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class CountryCode
{
    public const BGR = 100;
    public const ROU = 642;
    public const GBR = 826;

    public const CODES = [
        self::BGR,
        self::ROU,
        self::GBR,
    ];

    /**
     * Current ISO 3166 country numeric code.
     */
    private int $code;

    public function __construct(int $code)
    {
        $this->setCode($code);
    }

    /**
     * @todo Implement the logic for checking if $this and $other are equals
     */
    public function equals(self $other): bool
    {
        // you can try make it with one line of code
        return $this->getCode() === $other->getCode();
    }

    public function setCode(int $code): self
    {
        if (! \in_array($code, self::CODES)) {
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

    public function toArray(): array
    {
        return [];
    }
}
