<?php

namespace App;



class FizzBuzz {
	public function changeValue($value) {
        if($value % 3 == 0 && $value % 5 == 0){
            return 'FizzBuzz';	
        }
        if($value % 3 == 0){
            return 'Fizz';	

        }
        
        return 'Buzz';	

        
    }
    
    
}