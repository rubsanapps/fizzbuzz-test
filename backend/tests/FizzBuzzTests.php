<?php
use App\Models\FizzBuzz;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class ExampleTest extends TestCase
{


   /**
     * Test Basic API GET Request.
     * @return void
     */
    public function test_WhenBasicRequest_Expect_Response200()
    {
        $response = $this->get('/');

        $this->assertEquals(200, $this->response->status());
    }
    /**
     * @covers FizzBuzz::calculate
     */
    public function test_When_numberLessThan1_Expect_Error() {
        $fizzBuzz = new FizzBuzz();
        $input = -1;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_1_Expect_1() {
        $fizzBuzz = new FizzBuzz();
        $input = 1;
        $expected = 1;
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_3_Expect_Fizz() {
        $fizzBuzz = new FizzBuzz();
        $input = 3;
        $expected = "Fizz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_5_Expect_Buzz() {
        $fizzBuzz = new FizzBuzz();
        $input = 5;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_MultipleOf3_Expect_Fizz() {
        $fizzBuzz = new FizzBuzz();
        $input = 6;
        $expected = "Fizz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }


    public function test_When_MultipleOf5_Expect_Buzz() {
        $fizzBuzz = new FizzBuzz();
        $input = 10;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }


    public function test_When_15_Expect_FizzBuzz() {
        $fizzBuzz = new FizzBuzz();
        $input = 15;
        $expected = "FizzBuzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_MultipleOf3and5_Expect_FizzBuzz() {
        $fizzBuzz = new FizzBuzz();
        $input = 30;
        $expected = "FizzBuzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_AnyNumberNotMultipleInRange_Expect_SameNumber() {
        $fizzBuzz = new FizzBuzz();
        $input = 59;
        $expected = 59;
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_100_Expect_Buzz() {
        $fizzBuzz = new FizzBuzz();
        $input = 100;
        $expected = "Buzz";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_numberMoreThan100_Expect_Error() {
        $fizzBuzz = new FizzBuzz();
        $input = 101;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_numberIsEmpty_Expect_Error() {
        $fizzBuzz = new FizzBuzz();
        $input = '';
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_numberIsNotNumeric_Expect_Error() {
        $fizzBuzz = new FizzBuzz();
        $input = 'FizzBuzz';
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public function test_When_numberIsNull_Expect_Error() {
        $fizzBuzz = new FizzBuzz();
        $input = null;
        $expected = "Error";
        $result = $fizzBuzz->calculate($input);
        $this->assertEquals($expected, $result);
    }

}
