<?php

use PHPUnit\Framework\TestCase;
use CodingChallenge\QuestionFour;

class QuestionFourTest extends TestCase
{

    /** @test */
    public function it_returns_same_number_if_not_postive_or_0()
    {
        $this->assertEquals(0, QuestionFour::getSingleDigitNumber(0));

        $this->assertEquals(-2, QuestionFour::getSingleDigitNumber(-2));
    }

    /** @test */
    public function it_returns_4_for_4()
    {
        $this->assertEquals(4, QuestionFour::getSingleDigitNumber(4));
    }

    /** @test */
    public function it_returns_9_for_18()
    {
        $this->assertEquals(9, QuestionFour::getSingleDigitNumber(18));
    }

    /** @test */
    public function it_returns_6_for_258()
    {
        $this->assertEquals(6, QuestionFour::getSingleDigitNumber(258));
    }

}