<?php
namespace Core;
class BoardingCardsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */

    // tests
    public function testFailure()
    {
        $this->assertObjectHasAttribute('departure', new BoardingCards('A','B'));
        $this->assertObjectHasAttribute('arrival', new BoardingCards('A','B'));
        
        //$this->assertObjectHasAttribute('dummy', new BoardingCards('A','B'));
    }
}