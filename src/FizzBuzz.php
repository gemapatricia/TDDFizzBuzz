<?php declare( strict_types = 1 );

namespace App;

use Exception;

Class FizzBuzz {

    public function fizzBuzz(int $numero):string{
        
        if ($numero % 3 == 0 && $numero % 5 == 0) return "FizzBuzz";
        elseif ($numero % 3 == 0) return "Fizz";
        elseif ($numero % 5 == 0) return "Buzz";
        else return strval($numero);
    }

}

?>