<?php
/**
 * Created by PhpStorm.
 * User: johnny
 * Date: 20-04-17
 * Time: 21:52
 */

namespace LaravelUK\PHPCareer\Tests\Basic;

use LaravelUK\PHPCareer\Basic\Exceptions;

class ExceptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function test_it_should_throw_an_exception_in_function_myFirstThrow()
    {
        (new Exceptions)->myfirstThrow();
        $this->markTestIncomplete('Hmm, myFirstThrow Failed to throw an exception of type \Exception.');
    }
}
