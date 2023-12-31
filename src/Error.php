<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error.
 *
 * @Serializer\AccessType("public_method")
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Error
{
    /**
     * System generated unique error id to be used as this error reference.
     *
     * @Serializer\Type("string")
     */
    private string $id;

    /**
     * Message context, if associated. This refers to an item that is wrong and should be corrected.
     *
     * @Serializer\Type("string")
     */
    private ?string $context = null;

    /**
     * Error message in language specified in the request.
     *
     * @Serializer\Type("string")
     */
    private string $message;

    /**
     * Error code. See Appendix 3 - Error Codes for more details.
     *
     * @Serializer\Type("integer")
     */
    private int $code;

    /**
     * The request component, if applicable, relevant to this error in JSONPath format with dot notation.
     *
     * @Serializer\Type("string")
     */
    private ?string $component;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): void
    {
        $this->context = $context;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getComponent(): ?string
    {
        return $this->component;
    }

    public function setComponent(?string $component): void
    {
        $this->component = $component;
    }
}
