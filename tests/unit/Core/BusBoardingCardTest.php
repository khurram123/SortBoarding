<?php
namespace Core;
class BusBoardingCardTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */

    // tests
    public function testFailure()
    {
        $this->assertObjectHasAttribute('departure', new BusBoardingCard('A','B'));
        $this->assertObjectHasAttribute('arrival', new BusBoardingCard('A','B'));
        
        //$this->assertObjectHasAttribute('dummy', new BusBoardingCard('A','B'));
    }
}