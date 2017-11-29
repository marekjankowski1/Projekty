<?php //do dokonczenia

require 'zad2.php';

class Zadanie2 extends PHPUnit_Framework_TestCase
{
    public function test_numbers_smaller_than_10()
    {
        $this->assertEquals("jeden", numToTxt(1));
          $this->assertEquals("dwa", numToTxt(2));
          $this->assertEquals("trzy", numToTxt(3));
          $this->assertEquals("cztery", numToTxt(4));
          $this->assertEquals("pięć", numToTxt(5));
          $this->assertEquals("sześć", numToTxt(6));
          $this->assertEquals("siedem", numToTxt(7));
          $this->assertEquals("osiem", numToTxt(8));
           $this->assertEquals("dziewięć", numToTxt(9));
        
    }
     public function test_numbers_bigger_than_10_smaller_than_20()
     {
         $this->assertEquals("jedenaście", numToTxt(11));
     }
             
    
}