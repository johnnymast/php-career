<?php

namespace spec\LaravelUK\PHPCareer\LaravelUK\PHPCareer\Basic;

use LaravelUK\PHPCareer\Basic\Exceptions;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExceptionsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Exceptions::class);
    }

    public function it_should_throw_an_exception_in_function_myFirstThrow()
    {
        $this->shouldThrow('\Exception')->duringMyfirstThrow();
    }
}
