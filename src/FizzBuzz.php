<?php declare( strict_types = 1 );

namespace App;

use Exception;

Class FizzBuzz {

    public function fizzBuzz($numero):string{
        if (gettype($numero)=="integer") return strval($numero);
        else throw new Exception("No se ha introducido un número");
    }

}

?>