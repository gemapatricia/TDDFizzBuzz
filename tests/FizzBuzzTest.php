<?php declare( strict_types = 1 );

use \PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

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

    public function testStringInserted(){
        try{
            $fizzbuzz = new App\FizzBuzz();
            $cadena = $fizzbuzz->fizzbuzz("4");
            assertEquals(4, $cadena);

        }
        catch(Exception $e){
            assertEquals("No se ha introducido un número", $e->getMessage(), "No coincide la excepción");
        }
        
    }
}

?>