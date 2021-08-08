<?php

namespace CodingChallenge;

class QuestionFour 
{
	
	static function getSingleDigitNumber(int $int): int 
	{
		if($int <= 0) {
			return $int;
		}
		
		return ($int % 9 == 0) ? 9 : ($int % 9);
	}
}