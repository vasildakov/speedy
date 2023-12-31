<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Speedy;

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
    private int $width;

    private int $depth;

    private int $height;

    public function __construct(int $width, int $depth, int $height)
    {
        $this->setWidth($width);
        $this->setDepth($depth);
        $this->setHeight($height);
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
            Speedy::WIDTH => $this->getWidth(),
            Speedy::DEPTH => $this->getDepth(),
            Speedy::HEIGHT => $this->getHeight(),
        ];
    }
}
