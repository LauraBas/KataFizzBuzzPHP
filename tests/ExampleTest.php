<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;


class FizzBuzzTest extends TestCase {

	public function test_return_Fizz_if_value_multiple_3(
	) {
		$fizzbuzz = new FizzBuzz();
		$result = $fizzbuzz->changeValue(3);

		$this->assertEquals('Fizz', $result);
	}
	public function test_return_Fizz_if_value_multiple_5(
		) {
			$fizzbuzz = new FizzBuzz();
			$result = $fizzbuzz->changeValue(5);
	
			$this->assertEquals('Buzz', $result);
		}


}


