<?php

namespace App\Classes;

use App\Abstracts\BuildingAbstract;
use App\Classes\Square;
use App\Traits\Drawable;
use App\Traits\Squareable;

class Building extends BuildingAbstract
{
    use Squareable, Drawable;

    /**
     * @param $xNums
     * @param $yNums
     */
    public function __construct($xNums, $yNums)
    {
        parent::__construct($xNums, $yNums);
        $this->_generateSquares($this);
    }

}