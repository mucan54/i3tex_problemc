<?php

namespace App\Classes;

use App\Abstracts\SquareAbstract;
use App\Interfaces\BuildableShape;
use App\Interfaces\BuildingInterface;
use App\Interfaces\WallAlgorithm;

class WallBuilder
{

    private BuildingInterface $building;

    public function __construct($building)
    {
        $this->building = $building;
    }

    public function buildWalls(WallAlgorithm $wallBuilder)
    {
        for ($y = 1; $y <= $this->building->getYNums(); $y++) {
            for ($x = 1; $x <= $this->building->getXNums(); $x++) {
                $currentSquare = $this->building->getSquare($x, $y);
                $this->_wallCheck($currentSquare);
                $wallBuilder->buildWall($this->building->getSquare($x, $y));
            }
        }
    }

    private function _wallCheck(SquareAbstract $square)
    {
        $this->_convertNonesToWalls($square);
    }

    private function _convertNonesToWalls(SquareAbstract $square): void
    {
        if($square->getY() == 1)
            $square->setUpWall();
        if($square->getY() == $this->building->getYNums())
            $square->setDownWall();
        if($square->getX() == 1)
            $square->setLeftWall();
        if($square->getX() == $this->building->getYNums())
            $square->setRightWall();
    }

}