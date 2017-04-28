<?php

namespace spec\GameOfLife;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CellSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('GameOfLife\Cell');
    }

    function it_should_die_if_alive_in_under_population()
    {

        $this->nextStatus(true, 1)->shouldReturn(false);
    }

    function it_should_live_if_alive_in_regular_population(){
        $this->nextStatus(true,3)->shouldReturn(true);
    }

    function it_should_live_if_alive_in_over_population(){
        $this->nextStatus(true, 5)->shouldReturn(false);
    }

    function it_should_id_if_alive_in_three_neighbors(){
        $this->nextStatus(false,3)->shouldReturn(true);
    }

    function it_is_initialize_empty_world(){

        $this->initWorld(3,3)->shouldReturn(9);
    }

    function it_is_neighbor_next(){
        $this->isNext(0,0)->shouldReturn(true);
    }

/*
    function it_is_neigbor_next_live(){
        $this->initWorld(3,3);
        $this->isNextLive(0,0)->shouldReturn(true);
    }
*/

}
