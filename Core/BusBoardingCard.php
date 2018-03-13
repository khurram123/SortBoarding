<?php
namespace Core;
class BusBoardingCard extends BoardingCards
{
	function __construct($departure, $arrival) {		
			
			parent::__construct($departure, $arrival);
		}
        function showOutput()
        {
            return 'Take the airport bus from '.$this->departure.' to '.$this->arrival.' Airport. No seat assignment.';
        }
}