<?php

namespace App\Models;

class FizzBuzz
{

   /**
     * Returns the FizzBuzz calculation.
     * @param int $number Number between 1 and 100.
     * @return string Response the input number, Fizz if number is multiple of 3, Buzz if number is multiple of 5, FizzBuzz if number is multiple of 15 or Error
     */

	public static function calculate($number){

	/**
     * @var string $response Response
     */
        $response = "Error";

 		if ( $number < 1 || $number > 100 ) $response = "Error";
		else if ($number % 15 == 0) $response = "FizzBuzz";
		else if ($number % 3 == 0) $response = "Fizz";
		else if ($number % 5 == 0) $response = "Buzz";
		else $response = $number;
		
		return $response;
	}
}
