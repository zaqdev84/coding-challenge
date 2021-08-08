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


$questionTwo = new QuestionTwo("The last Monday of October 2190");

var_dump($questionTwo->isValidString());

echo $questionTwo->stringToDateConverter();