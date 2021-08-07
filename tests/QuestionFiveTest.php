<?php

use PHPUnit\Framework\TestCase;
use CodingChallenge\QuestionFive;

class QuestionFiveTest extends TestCase
{

    /*private $questionOne;
    public function setUp()
    {
        $this->questionOne = new QuestionOne();
    }
    /** @test */
    /*public function it_returns_bool_output()
    {
        $string = "";
        
        $this->assertIsBool($this->questionOne->repeatingLettersExists($string));

        $string = " ";

        $this->assertIsBool($this->questionOne->repeatingLettersExists($string));

        $string = "asadas";

        $this->assertIsBool($this->questionOne->repeatingLettersExists($string));

        $string = "asd,asd";

        $this->assertIsBool($this->questionOne->repeatingLettersExists($string));

        $string = "documentry";

        $this->assertIsBool($this->questionOne->repeatingLettersExists($string));

    }

    /** @test */
    /*public function it_returns_false_on_repeated_letters()
    {

        $string = "adad";
        $this->assertFalse($this->questionOne->repeatingLettersExists($string));

    }

    /** @test */
    /*public function it_returns_true_on_non_repeated_letters()
    {

        $string = "Cloud";
        $this->assertTrue($this->questionOne->repeatingLettersExists($string));

    }

    /** @test */
    /*public function it_returns_true_on_empty_string()
    {
        $string = "";
        var_dump($this->questionOne->repeatingLettersExists($string));
        $this->assertTrue($this->questionOne->repeatingLettersExists($string));
    }*/

}