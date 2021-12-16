<?php

namespace App\Abstracts;

use App\Interfaces\BuildableShape;

abstract class SquareAbstract implements BuildableShape
{
    /**
     * X coord of Square
     * @var int
     */
    private int $xCoord;

    /**
     * Y coord of square
     * @var int
     */
    private int $yCoord;

    /**
     * if has left wall
     * @var bool
     */
    private bool $leftWall;


    /**
     * if has right wall
     * @var bool
     */
    private bool $rightWall;

    /**
     * if has up wall
     * @var bool
     */
    private bool $upWall;

    /**
     * if has down wall
     * @var bool
     */
    private bool $downWall;

    public function __construct($xCoord, $yCoord)
    {
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
    }

    /**
     * get X coords of square
     * @return int
     */
    public function getX(): int
    {
        return $this->xCoord;
    }

    /**
     * get Y coords of square
     * @return int
     */
    public function getY(): int
    {
        return $this->yCoord;
    }

    /**
     * build up wall
     */
    public function setUpWall(): void
    {
        $this->upWall = true;
    }

    /**
     * build down wall
     */
    public function setDownWall(): void
    {
        $this->downWall = true;
    }

    /**
     * build left wall
     */
    public function setLeftWall(): void
    {
        $this->leftWall = true;
    }

    /**
     * build right wall
     */
    public function setRightWall(): void
    {
        $this->rightWall = true;
    }

    /**
     * get left wall
     * @return bool
     */
    public function isLeftWall(): bool
    {
        return $this->leftWall ?? false;
    }

    /**
     * get right wall
     * @return bool
     */
    public function isRightWall(): bool
    {
        return $this->rightWall ?? false;
    }

    /**
     * get up wall
     * @return bool
     */
    public function isUpWall(): bool
    {
        return $this->upWall ?? false;
    }

    /**
     * get down wall
     * @return bool
     */
    public function isDownWall(): bool
    {
        return $this->downWall ?? false;
    }

    /**
     * Get total wall number of square
     *
     * @return int
     */
    public function getTotal(): int
    {
        $total = 0;
        if ($this->isDownWall())
            $total++;
        if ($this->isLeftWall())
            $total++;
        if ($this->isRightWall())
            $total++;
        if ($this->isUpWall())
            $total++;
        return $total;
    }

    public function isCorner(): bool
    {
        if ($this->getX() == $this->getMyBuilding()->getXNums())
            return true;
        if ($this->getX() == 1)
            return true;
        if ($this->getY() == $this->getMyBuilding()->getYNums())
            return true;

        return false;
    }
}