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
		
		$propertiesListByType = [];

		$document = new \DOMDocument();

		if ( $document->load($this->filePath) ) {
		    $propertyList = $document->getElementsByTagName('propertyList'); // Find Sections
		    $k=0;
			foreach ($propertyList as $property) //go to each section 1 by 1
			{
				foreach($property->childNodes as $item) { 
				    if ($item->hasChildNodes()) {
				        $childs = $item->childNodes;
				        $uniqueId = $this->extractUniqueID($childs);
				        $propertiesListByType[$uniqueId] = 	$item->nodeName;			        
				    }
				}
			}
		}
		else {
		    echo "Could not load file";
		}		

		return $propertiesListByType;
	}

	private function extractUniqueID($childNodes)
	{
		foreach($childNodes as $i) {
			if($i->nodeName == 'uniqueID')
            	return $i->nodeValue;
        }

	}
}