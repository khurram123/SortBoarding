## Customer Portal Acme Bank

## Getting Started
    1.  navigate project root folder
    2.  run commands: `composer install` and `composer require codeception/codeception` (Codeception (with installed PHPUnit))

## Frontend
    Browse the package url via browser, It should output sorted list.

## Dependencies
    PHP 7.2

## Files

    index.php
    Core
    └── BoardingCards.php
    ├── BusBoardingCard.php
    ├── FlightBoardingCard.php
	├── TrainBoardingCard.php
    └── TripSorter.php
     test
	 └── unit
     │   │  └── Core
				└── BoardingCardsTest.php
				├── BusBoardingCardTest.php
				├── FlightBoardingCardTest.php
				├── TrainBoardingCardTest.php
				└── TripSorterTest.php
## Author
    Khurram Shehzad