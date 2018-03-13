<?php
namespace Core;
class TripSorterTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    // tests
    public function testFailure()
    {
        $boardingCard = [];
        $boardingCard[] = new FlightBoardingCard('Stockholm', 'New York JFK', 'SK22', '7B', '22', '');
        $boardingCard[] = new FlightBoardingCard('Gerona', 'Stockholm', 'SK455', '3A', '45B', '344');
        $boardingCard[] = new TrainBoardingCard('Madrid', 'Barcelona', '78A', '45B');
        $boardingCard[] = new BusBoardingCard('Barcelona', 'Gerona');

        $tripSorter = new TripSorter($boardingCard);

        $this->assertContains('Madrid', $tripSorter->startOfJourney());
       
        // $this->assertContains('Gerona', $tripSorter->startOfJourney());
    }
}