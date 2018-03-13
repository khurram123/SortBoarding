<?php
namespace Core;
class TrainBoardingCard extends BoardingCards
{
	public $trainName;
	public $seatNumber;
	
	function __construct($departure, $arrival, $trainName, $seatNumber) {		
			parent::__construct($departure, $arrival);
                        
			$this->trainName = $trainName;	
			$this->seatNumber = $seatNumber;		
		}
        function showOutput(){
                return 'Take train '.$this->trainName.' from '.$this->departure.' to '.$this->arrival.'. Sit in seat '.$this->seatNumber.'.';
            }
}