<?php

namespace CodingChallenge;

class QuestionFive 
{

	private $filePath = "./sample-reaxml.xml";

	public function __construct() 
	{

	}

	public function createArrayFromXML()
	{
		$document = new \DOMDocument();
		$document->loadXml($this->filePath);
		$xpath = new \DOMXpath($document);
		var_dump($xpath);
	}
	
	/*static function repeatingLettersExists(string $string): bool 
	{
		preg_match_all('/([a-z])(?:.*)(\1)+/i', $string, $matches);
		$result = array_combine($matches[0], array_map('strlen', $matches[0]));
		return (count($result) > 0) ? false : true;
	}*/
}