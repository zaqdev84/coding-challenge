<?php

require __DIR__ . '/vendor/autoload.php';

use CodingChallenge\QuestionOne;
use CodingChallenge\QuestionTwo;
use CodingChallenge\QuestionThree;
use CodingChallenge\QuestionFour;
use CodingChallenge\QuestionFive;


echo "Excercise 1\n";

$string = "Welcome";
$duplicatesExist = (!QuestionOne::repeatingLettersExists($string)) ? "YES" : "NO";

echo "Duplicate Letters Exist in $string? " . $duplicatesExist . "\n";


$string = "Documentarily";
$duplicatesExist = (!QuestionOne::repeatingLettersExists($string)) ? "YES" : "NO";

echo "Duplicate Letters Exist in $string? " . $duplicatesExist . "\n";


$questionTwo = new QuestionTwo("The last Monday of October 2019");

//var_dump($questionTwo->isValidString());

echo $questionTwo->stringToDateConverter() . "\n";

echo QuestionThree::mergeStrings("MICHAEL", "JORDAN") . "\n";

echo QuestionThree::mergeStrings("JORDAN", "MICHAEL") . "\n";

echo QuestionFour::getSingleDigitNumber(1234) . "\n";

echo QuestionFour::getSingleDigitNumber(145879898989899) . "\n";

echo QuestionFour::getSingleDigitNumber(999999999999999) . "\n";

$questionFive = new QuestionFive();

var_dump($questionFive->createArrayFromXML());