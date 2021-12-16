<?php

namespace App\Traits;

use App\Classes\Square;
use App\Classes\Building;

/**
 * Converts attached building to separable one.
 */
trait Squareable
{

    /**
     * Generate squares.
     *
     * @param Building $building
     * @return void
     */
    private function _generateSquares(Building $building): void
    {
        for ($x = 1; $x <= $building->getXNums(); $x++) {
            for ($y = 1; $y <= $building->getYNums(); $y++) {
                $building->_setSquare($x, $y, new Square($x, $y, $building));
            }
        }
    }
}