<?php
require('vendor/autoload.php');
$boardingCard = [];
$boardingCard[] = new Core\FlightBoardingCard('Stockholm', 'New York JFK', 'SK22', '7B', '22', '');
$boardingCard[] = new Core\FlightBoardingCard('Gerona', 'Stockholm', 'SK455', '3A', '45B', '344');
$boardingCard[] = new Core\TrainBoardingCard('Madrid', 'Barcelona', '78A', '45B');
$boardingCard[] = new Core\BusBoardingCard('Barcelona', 'Gerona');

$tripSorter = new Core\TripSorter($boardingCard);
$start = $tripSorter->startOfJourney();
$journeyLink = $tripSorter->journeyLink;
echo '<pre>';
//print_r($journeyLink);
//exit();


while ($start != null)
{
    if($journeyLink[$start] != null)
    {
        echo $journeyLink[$start]->showOutput();
        echo '<br>'; 
    }
    $start = $journeyLink[$start]->arrival;
}
exit;