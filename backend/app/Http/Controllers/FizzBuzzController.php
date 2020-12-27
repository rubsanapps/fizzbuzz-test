<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

use App\Models\FizzBuzz;

class FizzBuzzController extends BaseController
{

    /**
     * Returns the FizzBuzz calculation.
     * @param int $number Number between 1 and 100.
     * @return string Response the input number, Fizz if number is multiple of 3, Buzz if number is multiple of 5, FizzBuzz if number is multiple of 15 or Error
     */

    public function calculate($number)
    {

       return response()->json(FizzBuzz::calculate($number));

    }

}
