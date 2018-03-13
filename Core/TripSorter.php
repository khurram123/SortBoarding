<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of TripSorter
 *
 * @author khurram.shehzad
 */
class TripSorter
{
    protected $cards;
    public $journeyLink;
    function __construct(array $cards)
    {
        $this->cards = $cards;
        /*echo '<pre>';
        print_r($cards);*/
    }
    
    function startOfJourney()
    {
        foreach($this->cards as $searchCards)
        {
            $arrivals[] =  $searchCards->arrival;
            $this->journeyLink[$searchCards->departure]  = $searchCards;
        }
        
        foreach ($this->cards as $card)
        {
           if (!in_array($card->departure, $arrivals))
           {
               return $card->departure;
           }
        }
    }
}
