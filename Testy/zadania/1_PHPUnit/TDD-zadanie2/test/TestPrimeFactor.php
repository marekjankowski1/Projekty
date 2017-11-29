 <?php

require 'src/PrimeFactors.php';

class UserTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->object = new PrimeFactors;
    }
    
    public function testObjectExists()
    {
        $this->assertNotNull($this->object);
    } 
    
    public function testGeneratePrimeFactors()
    {
        $this->assertEquals([], PrimeFactors::generatePrimeFactors(1));
        $this->assertEquals([2], PrimeFactors::generatePrimeFactors(2));
        $this->assertEquals([3], PrimeFactors::generatePrimeFactors(3));
        $this->assertEquals([2, 2], PrimeFactors::generatePrimeFactors(4));
        $this->assertEquals([5], PrimeFactors::generatePrimeFactors(5));
        $this->assertEquals([2, 3], PrimeFactors::generatePrimeFactors(6));
        $this->assertEquals([7],PrimeFactors::generatePrimeFactors(7));
        $this->assertEquals([2, 2, 2],PrimeFactors::generatePrimeFactors(8));
        $this->assertEquals([3, 3],PrimeFactors::generatePrimeFactors(9));
        $this->assertEquals([2, 5],PrimeFactors::generatePrimeFactors(10));
        $this->assertEquals([2, 3, 5, 11, 13],PrimeFactors::generatePrimeFactors(2 * 3 * 5 * 11 * 13));        
        
    }
}
