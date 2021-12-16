<?php

namespace App\Classes;

use App\Abstracts\SquareAbstract;
use App\Traits\Buildable;
use App\Traits\Drawable;

class Square extends SquareAbstract
{
    use Buildable;

    /**
     * @param int $xCoord
     * @param int $yCoord
     * @param \App\Classes\Building|null $myBuilding
     */
    public function __construct(int $xCoord, int $yCoord, ?Building $myBuilding = null)
    {
        parent::__construct($xCoord, $yCoord);
        $this->myBuilding = $myBuilding;
    }

}