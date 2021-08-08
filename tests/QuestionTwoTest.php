<?php

use PHPUnit\Framework\TestCase;
use CodingChallenge\QuestionTwo;

class QuestionTwoTest extends TestCase
{

	/** @test */
    public function is_valid_string_returns_bool_output()
    {
    	//valid input

        $questionTwo = new QuestionTwo("The last Monday of October 2190");
        
        $this->assertIsBool($questionTwo->isValidString());


        //Empty string

        $questionTwo = new QuestionTwo(" ");
        
        $this->assertIsBool($questionTwo->isValidString());

        //in valid input

        $questionTwo = new QuestionTwo("The last of October 2190");
        
        $this->assertIsBool($questionTwo->isValidString());
    }

    /** @test */
    public function is_valid_string_returns_false_on_invalid_name_of_day()
    {

    	$questionTwo = new QuestionTwo("The last of October 2190");
        
        $this->assertFalse($questionTwo->isValidString());

        $questionTwo = new QuestionTwo("The last Wadnesday of October 2190");
        
        $this->assertFalse($questionTwo->isValidString());

    }

    /** @test */
    public function is_valid_string_returns_false_on_invalid_year()
    {

    	$questionTwo = new QuestionTwo("The last of October 219");
        
        $this->assertFalse($questionTwo->isValidString());

        $questionTwo = new QuestionTwo("The last Wadnesday of October 0219");
        
        $this->assertFalse($questionTwo->isValidString());

    }

    /** @test */
    public function is_valid_string_returns_true_on_valid_date_finder_string()
    {

        $questionTwo = new QuestionTwo("The last Wednesday of October 2019");
        
        $this->assertTrue($questionTwo->isValidString());

    }

    /** @test */
    public function it_returns_date_in_expected_yyyy_mm_dd_format()
    {
    	$questionTwo = new QuestionTwo("The last Wednesday of October 2019");
        $date = \DateTime::CreateFromFormat("Y-m-d",$questionTwo->stringToDateConverter());
        $this->assertTrue($date instanceof DateTime);
    }

    /** @test */
    public function it_returns_invalid_string_error_when_incorrect_string()
    {
        $questionTwo = new QuestionTwo("The last Wednesday of October 019");
        $this->assertEquals("Invalid String", $questionTwo->stringToDateConverter());
    }

}