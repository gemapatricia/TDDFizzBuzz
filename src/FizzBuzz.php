<?php declare( strict_types = 1 );

namespace App;

use Exception;

Class FizzBuzz {

    public function fizzBuzz(int $numero):string{
        if ($numero % 3 == 0) return "Fizz";
        return strval($numero);
    }

}

?>