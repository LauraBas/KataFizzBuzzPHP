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
	public function test_return_FizzBuzz_if_value_multiple_5_and_3(
		) {
			$fizzbuzz = new FizzBuzz();
			$result = $fizzbuzz->changeValue(15);
	
			$this->assertEquals('FizzBuzz', $result);
		}
		public function test_return_value_if_is_not_multiple_3_5(
			) {
				$fizzbuzz = new FizzBuzz();
				$result = $fizzbuzz->changeValue(8);
		
				$this->assertEquals(8, $result);
			}


}


