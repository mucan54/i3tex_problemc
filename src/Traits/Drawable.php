<?php

namespace App\Traits;

use App\Abstracts\SquareAbstract;
use App\Classes\Building;
use App\Classes\Square;
use App\Interfaces\BuildableShape;

/**
 * Converts attached object to buildable one.
 */
trait Drawable
{
    protected array $myString;

    public function drawMe()
    {
        for ($x = 1; $x <= $this->getXNums(); $x++) {
            for ($y = 1; $y <= $this->getYNums(); $y++) {
                $this->drawSquare($this->getSquare($x, $y));
            }
        }
    }

    private function drawSquare(Square $square)
    {
        if ($square->isLeftWall())
            $this->myString[$square->getX()-1][$square->getY()] = "|";
    }

}