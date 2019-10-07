<?php

namespace spec;

use FizzBuzz;
use PhpSpec\ObjectBehavior;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_should_output_numbers()
    {
        $this->generateResponse(1)->shouldReturn("1");
    }

    function it_should_output_fizz()
    {
        $this->generateResponse(3)->shouldReturn("1 2 Fizz");
    }


    function it_should_output_several_fizzes()
    {
        $this->generateResponse(9)->shouldReturn("1 2 Fizz 4 Buzz Fizz 7 8 Fizz");
    }

    function it_should_output_fizzbuzz()
    {
        $this->generateResponse(15)->shouldReturn("1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz");
    }

    

    function it_should_check_for_any_word()
    {
        $this->checkForType("Fizz",3)->shouldReturn(true);
        $this->checkForType("Fizz",4)->shouldReturn(false);
    }
}
