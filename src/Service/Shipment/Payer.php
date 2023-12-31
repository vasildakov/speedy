<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Shipment;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Payer.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 */
class Payer
{
    /**
     * array.
     */
    public const OPTIONS = [
        'SENDER',
        'RECIPIENT',
        'THIRD_PARTY',
    ];

    /**
     * @Serializer\Type("string")
     */
    private string $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    public function setValue(string $value): void
    {
        if (! \in_array($value, self::OPTIONS, true)) {
            throw new \InvalidArgumentException();
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
