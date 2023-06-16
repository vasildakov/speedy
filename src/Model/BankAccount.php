<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Speedy;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class BankAccount
 *
 * @Serializer\AccessType("public_method")
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 * @psalm-suppress MissingConstructor
 */
class BankAccount
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $iban;

    /**
     * @var string
     * @Serializer\Type("string")
     * TODO Validated according to IBAN standards
     */
    private string $accountHolder;

    /**
     * @param string $iban
     * @param string $accountHolder
     */
    public function __construct(string $iban, string $accountHolder)
    {
        $this->iban = $iban;
        $this->accountHolder = $accountHolder;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban(string $iban): void
    {
        $this->iban = $iban;
    }

    /**
     * @return string
     */
    public function getAccountHolder(): string
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     */
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
            Speedy::IBAN    =>  $this->getIban(),
            Speedy::ACCOUNT_HOLDER => $this->getAccountHolder()
        ];
    }
}
