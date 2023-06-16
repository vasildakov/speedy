<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Model;

use VasilDakov\Speedy\Speedy;

/**
 * Class Size
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
class Size
{
    /**
     * @var int
     */
    private int $width;

    /**
     * @var int
     */
    private int $depth;

    /**
     * @var int
     */
    private int $height;

    /**
     * @param int $width
     * @param int $depth
     * @param int $height
     */
    public function __construct(int $width, int $depth, int $height)
    {
        $this->setWidth($width);
        $this->setDepth($depth);
        $this->setHeight($height);
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param int $depth
     */
    public function setDepth(int $depth): void
    {
        $this->depth = $depth;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            Speedy::WIDTH  => $this->getWidth(),
            Speedy::DEPTH  => $this->getDepth(),
            Speedy::HEIGHT => $this->getHeight()

        ];
    }
}