<?php

namespace App\Classes;

use App\Abstracts\WallAlgorithmAbstract;
use App\Interfaces\BuildableShape;

class SimpleWallAlgorithm extends WallAlgorithmAbstract
{


    /**
     * @param BuildableShape $square
     */
    public function buildWall(BuildableShape $square)
    {
        if($square->isCorner()){
            $this->_buildVerticalRoom($square);
            return $square;
        }

        if($square->getTotal() >= 2)
            return $square;
        if($square->getDown()){
            if($square->getDown()->getTotal()>2)
                return $square;
        }else{
            if($square->getX()>2 && $square->getLeft()->getTotal() + $square->getLeft()->getLeft()->getTotal() < 3){
                $this->_buildVerticalRoom($square);
            }

        }
    }

    private function _buildVerticalRoom(BuildableShape $square){
        $square->setBuildingLeftWall();
        $square->setBuildingRightWall();
    }

    private function _buildHorizontalRooms(BuildableShape $square){
        $square->setBuildingUpWall();
        $square->setBuildingDownWall();
    }
}