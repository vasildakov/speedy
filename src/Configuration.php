<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

/**
 * Class Options.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Configuration
{
    private string $username;

    private string $password;

    private string $language;

    public function __construct(string $username, string $password, string $language)
    {
        $this->username = $username;
        $this->password = $password;
        $this->language = $language;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function toArray(): array
    {
        return [
            Property::USER_NAME->value => $this->getUsername(),
            Property::PASSWORD->value => $this->getPassword(),
            Property::LANGUAGE->value => $this->getLanguage(),
        ];
    }
}
