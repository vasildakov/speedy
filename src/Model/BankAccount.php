<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use JMS\Serializer\Annotation as Serializer;
use VasilDakov\Speedy\Property;
use VasilDakov\Speedy\Speedy;

/**
 * Class BankAccount.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 *
 * @version
 *
 * @psalm-suppress MissingConstructor
 */
class BankAccount
{
    /**
     * @Serializer\Type("string")
     */
    private string $iban;

    /**
     * @Serializer\Type("string")
     * TODO Validated according to IBAN standards
     */
    private string $accountHolder;

    public function __construct(string $iban, string $accountHolder)
    {
        $this->iban = $iban;
        $this->accountHolder = $accountHolder;
    }

    public function getIban(): string
    {
        return $this->iban;
    }

    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }

    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    public function setAccountHolder(string $accountHolder): void
    {
        $this->accountHolder = $accountHolder;
    }

    /**
     * @return string[]
     */
    public function toArray(): array
    {
        return [
            Property::IBAN->value => $this->getIban(),
            Property::ACCOUNT_HOLDER->value => $this->getAccountHolder(),
        ];
    }
}
