<?php
namespace Core;
class TrainBoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */

    // tests
    public function testFailure()
    {
        $this->assertObjectHasAttribute('departure', new TrainBoardingCard('A','B','AA','12'));
        $this->assertObjectHasAttribute('arrival', new TrainBoardingCard('A','B','AA','12'));
        $this->assertObjectHasAttribute('trainName', new TrainBoardingCard('A','B','AA','12'));
        $this->assertObjectHasAttribute('seatNumber', new TrainBoardingCard('A','B','AA','12'));
        
        //$this->assertObjectHasAttribute('dummy', new TrainBoardingCard('A','B','AA','12'));
    }
}