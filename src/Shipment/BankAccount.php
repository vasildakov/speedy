<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Shipment;

use VasilDakov\Speedy\Speedy;

/**
 * Class BankAccount
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class BankAccount
{
    /**
     * @var string
     */
    private string $iban;

    /**
     * @var string
     */
    private string $accountHolder;

    /**
     * @param string $iban
     * @param string $accountHolder
     */
    public function __construct(string $iban, string $accountHolder)
    {
        $this->setIban($iban);
        $this->setAccountHolder($accountHolder);
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