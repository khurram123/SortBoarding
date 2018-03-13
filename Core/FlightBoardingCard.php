<?php
namespace Core;
class FlightBoardingCard extends BoardingCards
{
	public $flightNumber;
	public $seatNumber;
	public $gateNumber;
	public $ticketCounter;
	
            function __construct($departure, $arrival, $flightNumber, $seatNumber, $gateNumber, $ticketCounter) {		
			
			parent::__construct($departure, $arrival);
			
			$this->flightNumber = $flightNumber;
			$this->seatNumber = $seatNumber;
			$this->gateNumber = $gateNumber;	
			$this->ticketCounter = $ticketCounter;	
		}
            function showOutput()
            {
                $finalResult = 'From '.$this->departure.' Airport, take flight '.$this->flightNumber.' to '.$this->arrival.'. Gate '.$this->gateNumber.', seat '.$this->seatNumber.'.';
                if($this->ticketCounter)
                {
                    $finalResult .= ' Baggage drop at ticket counter '.$this->ticketCounter.'.';
                }
                else
                {
                    $finalResult .= ' Baggage will we automatically transferred from your last leg.';
                }
                return $finalResult;
            }
}