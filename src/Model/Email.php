<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

/**
 * Class Email
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Email implements \JsonSerializable
{
    /**
     * @var string
     */
    private string $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    private function setValue(string $value): void
    {
        if (!\filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException();
        }
        $this->value = $value;
    }

    /**
     * @param Email $other
     * @return int
     */
    public function compareTo(Email $other): int
    {
        return \strcasecmp($this->getValue(), $other->getValue());
    }

    /**
     * @param Email $other
     * @return bool
     */
    public function equals(Email $other): bool
    {
        return $this->compareTo($other) === 0;
    }

    /**
     * @return string
     */
    final public function __toString(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [

        ];
    }
}
