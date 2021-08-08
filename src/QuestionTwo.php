<?php

namespace CodingChallenge;

class QuestionTwo 
{
	
	private $dateString;
	private $date_array_from_string;

	public function __construct(string $string)
	{
		$this->dateString = $string;
	}

	public function stringToDateConverter() : string
	{

		if($this->isValidString()) 
		{
			array_shift($this->date_array_from_string);

			$d = new \DateTime();
			$d->modify( implode(" ", $this->date_array_from_string) );
			return $d->format( "Y-m-d" );			
		}
		else 
		{
			return "Invalid String";
		}

	}

	public function isValidString() : bool
	{
		/**
			"The first Monday of October 2019" => "2019-10-07"
			"The third Tuesday of October 2019" => "2019-10-15"
			"The last Wednesday of October 2019" => "2019-10-30"

			2nd element must be descriptor
				The descriptors you are expected to support are: .
			3rd element must be day name of week
			5th element must be month
			6th element must be 4 digit year
		*/

		$this->date_array_from_string = preg_split("/[\s,]+/", $this->dateString);

		if(count($this->date_array_from_string) <> 6) 
		{
			return false;
		}

		if(!in_array($this->date_array_from_string[1], ['first', 'second', 'third', 'fourth', 'fifth', 'last']))
		{
			return false;
		}

		$validDayName = \DateTime::CreateFromFormat('l', $this->date_array_from_string[2]);
		
		if(!$validDayName) 
		{
			return false;
		}

		$validMonthName = \DateTime::CreateFromFormat('F', $this->date_array_from_string[4]);
		
		if(!$validMonthName) 
		{
			return false;
		}

		preg_match_all('/^((?!(0))[0-9]{4})$/', $this->date_array_from_string[5], $result);

		$validYear = array_combine($result[0], array_map('strlen', $result[0]));

		if(!$validYear) 
		{
			return false;
		}		

		return true;

	}
}