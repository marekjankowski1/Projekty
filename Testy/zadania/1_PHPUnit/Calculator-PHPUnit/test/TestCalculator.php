<?php //testy przy pomocy skeleton genrator

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->object = new Calculator;
    }

    public function testCalculatorExists()
    {
        $this->assertNotEmpty($this->object);
    }
    
    public function testAdd()
    {
        $this->assertEquals(0, $this->object->add(0,0));
        $this->assertEquals(-1, $this->object->add(-1,0));
        $this->assertEquals(1, $this->object->add(0,1));
        $this->assertEquals(2, $this->object->add(1,1));
        $this->assertEquals(3, $this->object->add(2,1));
        $this->assertEquals(3, $this->object->add(1,2));
    }
    
    public function testMultiply()
    {
        $this->assertEquals(0, $this->object->multiply(0,0));
        $this->assertEquals(1, $this->object->multiply(1,1));
        $this->assertEquals(4, $this->object->multiply(2,2));
        
    }
    
    public function testSubtract()
    {
        $this->assertEquals(0, $this->object->subtract(1,1));
        
    }
    
//    public function testMultiplyMany()
//    {
//        $this->assertEquals(2, $this->object->multiplyMany([1,2]));
 //   }
    
    public function testDivide()
    {
        $this->assertNull($this->object->divide(1,0));
        $this->assertEquals(1, $this->object->divide(1,1));
    }
    
    public function testPrintOperationsReturnsSelf()
    {
        $this->assertEquals($this->object, $this->object->printOperations());
    }
    
    public function testPrintOperationsAdd()
    {
        $this->object->add(1,1);
        $this->assertEquals($this->object, $this->object->printOperations());
        $this->assertEquals("added 1 to 1 got 2", $this->object->operationHistory[0]);
    }
    
    public function testClearOperations()
    {
       $this->assertEmpty($this->object->operationHistory);
       $this->object->add(1,1);
       $this->assertNotEmpty($this->object->operationHistory);
       $this->object->clearOperations();
       $this->assertEmpty($this->object->operationHistory);
    }
}
//    public function testMultiplyAnyAndAdd()
//    {
//        $this->assertEquals(0, $this->object->multiplyAnyAndAdd([0],0));
//    }
