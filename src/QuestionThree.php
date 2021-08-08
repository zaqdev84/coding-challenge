<?php

namespace CodingChallenge;

class QuestionThree 
{
	
	static function mergeStrings(string $string1, string $string2): string 
	{
		$mergedString = '';
	    
	    $minLength = min(strlen($string1), strlen($string2));

	    for($i=0; $i<$minLength; $i++)
	    {
	        $mergedString = $mergedString . $string1[$i] . $string2[$i];
	    }
	   return $mergedString = $mergedString . substr($string1, $minLength) . substr($string2, $minLength);
	}
}