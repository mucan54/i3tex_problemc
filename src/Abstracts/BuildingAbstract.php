<?php

namespace App\Abstracts;

use App\Abstracts\SquareAbstract;
use App\Interfaces\BuildingInterface;

abstract class BuildingAbstract implements BuildingInterface
{
    /**
     * number of squares on x coord
     * @var int
     */
    private int $xNums;

    /**
     * number of squares on y coord
     * @var int
     */
    private int $yNums;

    /**
     * @var SquareAbstract[]
     */
    private array $squares;

    /**
     * @param $xNums
     * @param $yNums
     */
    public function __construct($xNums, $yNums)
    {
        $this->xNums = $xNums;
        $this->yNums = $yNums;
    }

    /**
     * @return int
     */
    public function getXNums(): int
    {
        return $this->xNums;
    }

    /**
     * @param int $xNums
     */
    public function setXNums(int $xNums): void
    {
        $this->xNums = $xNums;
    }

    /**
     * @return int
     */
    public function getYNums(): int
    {
        return $this->yNums;
    }

    /**
     * @param int $yNums
     */
    public function setYNums(int $yNums): void
    {
        $this->yNums = $yNums;
    }

    /**
     * @return SquareAbstract[]
     */
    public function getSquares(): array
    {
        return $this->squares;
    }

    /**
     * @param SquareAbstract[] $squares
     */
    public function setSquares(array $squares): void
    {
        $this->squares = $squares;
    }

    /**
     * @param $x
     * @param $y
     * @return \App\Abstracts\SquareAbstract|null
     */
    public function getSquare($x, $y): ?SquareAbstract
    {
        return $this->squares[$x][$y] ?? null;
    }

    /**
     * @param int $x
     * @param int $y
     * @param \App\Abstracts\SquareAbstract $square
     * @return void
     */
    protected function _setSquare(int $x, int $y, SquareAbstract $square): void
    {
        $this->squares[$x][$y] = $square;
    }
}