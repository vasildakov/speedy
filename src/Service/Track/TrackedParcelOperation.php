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
 * Class TrackedParcelOperation.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 *
 * @version 1.0
 * @psalm-suppress MissingConstructor
 * @Serializer\AccessType("public_method")
 */
class TrackedParcelOperation
{
    /**
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:sP'>")
     */
    private \DateTime $dateTime;

    /**
     * @Serializer\Type("integer")
     */
    private int $operationCode;

    /**
     * @Serializer\Type("string")
     */
    private ?string $description = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $comment = null;

    /**
     * @Serializer\Type("string")
     */
    private ?string $place = null;

    /**
     * @Serializer\Type("array")
     */
    private array|null $additionalInfo;

    public function __construct(
        \DateTime $dateTime,
        int $operationCode,
        string $description,
        string $comment,
        string $place = null,
        ?array $additionalInfo = []
    ) {
        $this->dateTime = $dateTime;
        $this->operationCode = $operationCode;
        $this->description = $description;
        $this->comment = $comment;
        $this->place = $place;
        $this->additionalInfo = $additionalInfo;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    public function getOperationCode(): int
    {
        return $this->operationCode;
    }

    public function setOperationCode(int $operationCode): void
    {
        $this->operationCode = $operationCode;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(?string $place): void
    {
        $this->place = $place;
    }

    public function getAdditionalInfo(): ?array
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(array $additionalInfo): void
    {
        $this->additionalInfo = $additionalInfo;
    }
}
