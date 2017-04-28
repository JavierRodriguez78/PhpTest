<?php

namespace GameOfLife;

class Cell
{

    private $status;
    private $cellCol;
    private $cellRow;


    public function __construct()
    {

        $this->status = rand(0,1);
        $this->cellCol=1;
        $this->cellRow=1;

    }


    public function nextStatus($alive, $population)
    {
        if($alive == true && $population < 2 ){

            $this->status= false;
        }

        if($alive == true && ($population == 2 || $population == 3)){
            $this->status = true;
        }

        if($alive==true && $population >3){
            $this->status = false;
        }

        if($alive == false && $population == 3){
            $this->status = true;
        }

        return $this->status;

    }



    public function initWorld($argument1, $argument2)
    {

       return $argument1*$argument2;
    }



    public function getStatus(){
        return $this->status;
    }

    public function isNext($row, $col)
    {
        if($this->cellRow -$row == 1){
            return true;
        }

    }

    public function isNextLive($row, $col)
    {
       if ($this->isNext($row,$col)){
           return $this->cellRow[$row][$col]->getStatus();
       }
    }
}
