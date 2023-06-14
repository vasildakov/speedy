<?php declare(strict_types=1);


namespace VasilDakov\Speedy;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 *
 * @Serializer\AccessType("public_method")
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Error
{
    /**
     * System generated unique error id to be used as this error reference.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private string $id;

    /**
     * Message context, if associated. This refers to an item that is wrong and should be corrected.
     *
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $context = null;

    /**
     * Error message in language specified in the request.
     *
     * @var string
     * @Serializer\Type("string")
     */
    private string $message;

    /**
     * Error code. See Appendix 3 - Error Codes for more details.
     *
     * @var int
     * @Serializer\Type("integer")
     */
    private int $code;

    /**
     * The request component, if applicable, relevant to this error in JSONPath format with dot notation.
     *
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $component;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * @param string|null $context
     */
    public function setContext(?string $context): void
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string|null
     */
    public function getComponent(): ?string
    {
        return $this->component;
    }

    /**
     * @param string|null $component
     */
    public function setComponent(?string $component): void
    {
        $this->component = $component;
    }
}