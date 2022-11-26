<?php

use \PHPUnit\Framework\TestCase;

Class FizzBuzzTest extends TestCase{

    public function testConvertNumberString(){
        $fizzbuzz = new FizzBuzz();
        $cadena = $fizzbuzz->fizzbuzz(13);
        $this->assertEquals("13", $cadena, "No coincide la cadena");
    }
}

?>