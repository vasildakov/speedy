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

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class TrackedParcel
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2023 Neutrino.bg
 * @version 1.0
 * @Serializer\AccessType("public_method")
 */
class TrackedParcel
{
    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private int $parcelId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private string $externalCarrierParcelNumbers;

    /**
     * @Serializer\Type("ArrayCollection<VasilDakov\Speedy\Service\Track\TrackedParcelOperation>")
     */
    private ArrayCollection $operations;

    /**
     * @return int
     */
    public function getParcelId(): int
    {
        return $this->parcelId;
    }

    /**
     * @param int $parcelId
     */
    public function setParcelId(int $parcelId): void
    {
        $this->parcelId = $parcelId;
    }

    /**
     * @return string
     */
    public function getExternalCarrierParcelNumbers(): string
    {
        return $this->externalCarrierParcelNumbers;
    }

    /**
     * @param string $externalCarrierParcelNumbers
     */
    public function setExternalCarrierParcelNumbers(string $externalCarrierParcelNumbers): void
    {
        $this->externalCarrierParcelNumbers = $externalCarrierParcelNumbers;
    }

    /**
     * @return ArrayCollection
     */
    public function getOperations(): ArrayCollection
    {
        return $this->operations;
    }

    /**
     * @param ArrayCollection $operations
     */
    public function setOperations(ArrayCollection $operations): void
    {
        $this->operations = $operations;
    }

}
