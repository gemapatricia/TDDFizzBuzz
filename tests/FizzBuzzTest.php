<?php

use \PHPUnit\Framework\TestCase;

Class FizzBuzzTest extends TestCase{

    public function testConvertNumberString(){
        $fizzbuzz = new App\FizzBuzz();
        $cadena = $fizzbuzz->fizzbuzz(13);
        $this->assertEquals("13", $cadena, "No coincide la cadena");
    }

    public function testConvertNumberString2(){
        $fizzbuzz = new App\FizzBuzz();
        $cadena = $fizzbuzz->fizzbuzz(7);
        $this->assertEquals("7", $cadena, "No coincide la cadena");
    }
}

?>