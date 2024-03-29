<?php

/*
 * This file is part of the Neutrino package.
 *
 * (c) Vasil Dakov <vasildakov@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Validation;

/**
 * Class ValidatePhoneRequest.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 */
class ValidatePhoneRequest
{
    /**
     * Phone number.
     */
    private string $number;

    /**
     * Phone number extension.
     */
    private ?string $ext;

    public function __construct(string $number, string $ext = null)
    {
        $this->number = $number;
        $this->ext = $ext;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getExt(): ?string
    {
        return $this->ext;
    }
}
