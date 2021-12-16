<?php


namespace App\Classes;

require '../../vendor/autoload.php';

use App\Classes\Building;

new Main();

class Main
{

    public function __construct(){
        $this->app();
    }

    public function app(){

        $building = new Building(5,5);
        $wallBuilder = new WallBuilder($building);
        $wallBuilder->buildWalls(new SimpleWallAlgorithm());
        $building->drawMe();
    }
}