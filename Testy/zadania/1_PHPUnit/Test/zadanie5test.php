<?php 

require 'zad5.php';

class TestBankAccount extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->object = new BankAccount;
    }

    public function testObjectExists()
    {
        $this->assertNotEmpty($this->object);
    }
    
    public function testCashIsZero()
    {
        $this->assertEquals(0, $this->object->getCash());
    }
    
    public function testDepositCashNoErrors()
    {
        $this->object->depositCash(10);
        $this->assertEquals(10, $this->object->getCash());
        
        $this->object->depositCash(1.1);
        $this->assertEquals(11.1, $this->object->getCash());
    }
    
    public function testDepositCashInvalidArgument()
    {
        $this->object->depositCash(true);
        $this->object->depositCash(false);
        $this->object->depositCash([100]);
        $this->object->depositCash($this->object);
        $this->object->depositCash(-100);
        $this->object->depositCash(-0.000001);
        
        $this->assertEquals(0, $this->object->getCash());
    }
    
    public function testWithdrawCashInvalidArgument()
    {
        $this->assertEquals( null, $this->object->withdrawCash(-200));
        
    }
    
    public function testWithdrawCashMoreThanWeGot()
    {
        $this->object->depositCash(10); 
        $this->assertEquals(10 , $this->object->withdrawCash(200));
        
    }
    
    public function testWithdrawCashOK()
    {
        $this->object->depositCash(10); 
        $this->assertEquals(9, $this->object->withdrawCash(9));
        $this->assertEquals(1, $this->object->getCash());
        
    }
    
    public function testPrintInfo()
    {
       
    }
}
