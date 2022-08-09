<?php
declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

/**
 * Class Payer
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class Payer
{
    /**
     * array
     */
    public const OPTIONS = [
        'SENDER',
        'RECIPIENT',
        'THIRD_PARTY'
    ];

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
     * @param string $value
     * @return void
     */
    private function setValue(string $value): void
    {
        if (!in_array($value, self::OPTIONS, true)) {
            throw new \InvalidArgumentException();
        }
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getValue();
    }
}