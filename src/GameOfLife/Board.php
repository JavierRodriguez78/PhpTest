<?php

namespace GameOfLife;

class Board
{
    private $cellBoard;
    public function __construct($argument1, $argument2)
    {
        for ($row = 0 ; $row<$argument1; $row++){
            for($col = 0 ; $col<$argument2; $col++){
                $this->cellBoard[$row][$col] = new Cell();
            }
        }

    }

    public function countPopulationLife()
    {
        $countLive = 0;
        for ($row = 0 ; $row<3; $row++){
            for($col = 0 ; $col<3; $col++){
                if($this->cellBoard[$row][$col]->getStatus() == true){
                    $countLive++;
                }
            }
        }
        return $countLive;
    }
}
