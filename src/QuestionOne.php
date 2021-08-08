<?php

namespace CodingChallenge;

class QuestionOne 
{
	
	static function repeatingLettersExists(string $string): bool 
	{
		// find letters with more than 1 occurance in the string
		preg_match_all('/([a-z])(?:.*)(\1)+/i', $string, $matches);

		$result = array_combine($matches[0], array_map('strlen', $matches[0]));
		
		return (count($result) > 0) ? false : true;
	}
}