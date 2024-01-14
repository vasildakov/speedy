<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Property;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Size.
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version 1.0
 */
class Size
{
    /**
     * @Serializer\Type("int")
     */
    private int $width;

    /**
     * @Serializer\Type("int")
     */
    private int $depth;

    /**
     * @Serializer\Type("int")
     */
    private int $height;

    public function __construct(int $width, int $depth, int $height)
    {
        $this->width = $width;
        $this->depth = $depth;
        $this->height = $height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function setDepth(int $depth): void
    {
        $this->depth = $depth;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function toArray(): array
    {
        return [
            Property::WIDTH->value => $this->getWidth(),
            Property::DEPTH->value => $this->getDepth(),
            Property::HEIGHT->value => $this->getHeight(),
        ];
    }
}
