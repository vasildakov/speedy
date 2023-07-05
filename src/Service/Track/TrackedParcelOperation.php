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

namespace VasilDakov\Speedy\Service\Track;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class TrackedParcelOperation
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class TrackedParcelOperation
{
    /**
     * @var DateTime
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    private DateTime $dateTime;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private int $operationCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $description;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $comment;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    private ?string $place = null;

    /**
     * @var array
     * @Serializer\Type("array")
     */
    private array $additionalInfo = [];

    public function __construct(
        DateTime $dateTime,
        int $operationCode,
        string $description,
        string $comment,
        ?string $place = null,
        ?array $additionalInfo = []
    ) {
        $this->dateTime = $dateTime;
        $this->operationCode = $operationCode;
        $this->description = $description;
        $this->comment = $comment;
    }

    /**
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param DateTime $dateTime
     */
    public function setDateTime(DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return int
     */
    public function getOperationCode(): int
    {
        return $this->operationCode;
    }

    /**
     * @param int $operationCode
     */
    public function setOperationCode(int $operationCode): void
    {
        $this->operationCode = $operationCode;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string|null
     */
    public function getPlace(): ?string
    {
        return $this->place;
    }

    /**
     * @param string|null $place
     */
    public function setPlace(?string $place): void
    {
        $this->place = $place;
    }

    /**
     * @return array|null
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->additionalInfo;
    }

    /**
     * @param array|null $additionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }

}
