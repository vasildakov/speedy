<?php declare(strict_types=1);

namespace VasilDakov\Speedy;

/**
 * Class Options
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Configuration
{
    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $password;

    /**
     * @var string
     */
    private string $language;

    /**
     * @param string $username
     * @param string $password
     * @param string $language
     */
    public function __construct(string $username, string $password, string $language)
    {
        $this->username = $username;
        $this->password = $password;
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            Speedy::USER_NAME => $this->getUsername(),
            Speedy::PASSWORD  => $this->getPassword(),
            Speedy::LANGUAGE  => $this->getLanguage(),
        ];
    }
}
