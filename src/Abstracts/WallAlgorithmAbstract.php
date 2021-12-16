<?php

namespace App\Abstracts;

use App\Interfaces\BuildableShape;
use App\Interfaces\WallAlgorithm;

abstract class WallAlgorithmAbstract implements WallAlgorithm
{
    /**
     * @var BuildableShape
     */
    protected BuildableShape $square;
}