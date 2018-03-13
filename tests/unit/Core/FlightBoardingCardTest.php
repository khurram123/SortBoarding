<?php
namespace Core;
class FlightBoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */

    // tests
    public function testFailure()
    {
        $this->assertObjectHasAttribute('departure', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        $this->assertObjectHasAttribute('arrival', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        $this->assertObjectHasAttribute('flightNumber', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        $this->assertObjectHasAttribute('seatNumber', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        $this->assertObjectHasAttribute('gateNumber', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        $this->assertObjectHasAttribute('ticketCounter', new FlightBoardingCard('A','B','AA','12','A1','T2'));
        
        //$this->assertObjectHasAttribute('dummy', new FlightBoardingCard('A','B','AA','12','A1','T2'));
    }
}