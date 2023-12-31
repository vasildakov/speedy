<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class Email.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Email implements \JsonSerializable
{
    private string $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }

    private function setValue(string $value): void
    {
        if (!\filter_var($value, \FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException();
        }
        $this->value = $value;
    }

    public function compareTo(self $other): int
    {
        return \strcasecmp($this->getValue(), $other->getValue());
    }

    public function equals(self $other): bool
    {
        return 0 === $this->compareTo($other);
    }

    final public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public function toArray(): array
    {
        return [];
    }
}
