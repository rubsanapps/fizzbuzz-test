<?php

use Laravel\Lumen\Testing\TestCase as BaseTestCase;
use App\Models\FizzBuzz;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    public function testLessThan1() {
        $fizzBuzz = new FizzBuzz();
        $input = -1;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test1() {
        $fizzBuzz = new FizzBuzz();
        $input = 1;
        $expected = 1;
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test3() {
        $fizzBuzz = new FizzBuzz();
        $input = 3;
        $expected = "Fizz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test5() {
        $fizzBuzz = new FizzBuzz();
        $input = 5;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test6() {
        $fizzBuzz = new FizzBuzz();
        $input = 6;
        $expected = "Fizz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }


    public function test10() {
        $fizzBuzz = new FizzBuzz();
        $input = 10;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }


    public function test15() {
        $fizzBuzz = new FizzBuzz();
        $input = 15;
        $expected = "FizzBuzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test30() {
        $fizzBuzz = new FizzBuzz();
        $input = 30;
        $expected = "FizzBuzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test59() {
        $fizzBuzz = new FizzBuzz();
        $input = 59;
        $expected = 59;
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test100() {
        $fizzBuzz = new FizzBuzz();
        $input = 100;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function testMoreThan100() {
        $fizzBuzz = new FizzBuzz();
        $input = 101;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function testEmpty() {
        $fizzBuzz = new FizzBuzz();
        $input = '';
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function testNoNumeric() {
        $fizzBuzz = new FizzBuzz();
        $input = 'FizzBuzz';
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function testNull() {
        $fizzBuzz = new FizzBuzz();
        $input = null;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }
}
