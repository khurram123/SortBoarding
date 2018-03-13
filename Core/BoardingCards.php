<?php
namespace Core;
class BoardingCards
{
	public $departure;
	public $arrival;
	
	function __construct($departure, $arrival)
	{
		$this->departure = $departure;
		$this->arrival = $arrival;	
	}
}