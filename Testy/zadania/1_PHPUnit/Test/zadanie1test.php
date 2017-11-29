<?php

require 'zad1.php';

class Zadanie1 extends PHPUnit_Framework_TestCase
{
    public function test_no_year_given_return_false()
    {
        $this->assertFalse(is_year_leap());
    }


public function test_not_a_leap_year()
{
    $this->assertEquals(0, is_year_leap(2200));
    $this->assertEquals(1, is_year_leap(2400));
}
            
        
}        
        
