<?php

use PHPUnit\Framework\TestCase;
use CodingChallenge\QuestionThree;

class QuestionThreeTest extends TestCase
{
    
    /** @test */
    public function it_returns_string_output()
    {
        $string1 = "Test1";
        $string2 = "Test2";

        $this->assertInternalType('string', QuestionThree::mergeStrings($string1, $string2));
    }

    /** @test */
    public function it_returns_expected_string_for_MICHAEL_JORDAN_as_MJIOCRHDAAENL()
    {

        $string1 = "MICHAEL";
        $string2 = "JORDAN";
        $this->assertEquals('MJIOCRHDAAENL', QuestionThree::mergeStrings($string1, $string2));

    }

    /** @test */
    public function it_returns_expected_string_for_JORDAN_MICHAEL_as_JMOIRCDHAANEL()
    {

        $string1 = "JORDAN";
        $string2 = "MICHAEL";
        $this->assertEquals('JMOIRCDHAANEL', QuestionThree::mergeStrings($string1, $string2));

    }

}