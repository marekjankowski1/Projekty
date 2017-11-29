<?php

require 'src/User.php';

class UserTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->object = new User;
        $this->login = 'Pawel';
        $this->password = 'Password';
        $this->newPassword = 'NewPassword';
    }

    public function testUserRegistrationOK()
    {
       
        $this->assertTrue($this->object->register($this->login, $this->password));
    }

    public function testUserRegistrationMissingLogin()
    {
        $login = '';
        $password = 'Password';
        $this->assertFalse($this->object->register($login, $password));
    }

    public function testUserRegistrationMissingPassword()
    {
        $login = 'Pawel';
        $password = '';
        $this->assertFalse($this->object->register($login, $password));
    }

    public function testLoginOK()
    {
       
        $this->object->register($this->login, $this->password);
        $this->assertTrue($this->object->login($this->login, $this->password));
    }

    public function testLoginWrongPassword()
    {
        
        $wrongPassword = '123';
        $this->object->register($this->login, $this->password);
        $this->assertFalse($this->object->login($this->login, $wrongPassword));
    }
    
    protected function preEditPassword()
    {
       
        $this->object->register($this->login, $this->password);
    }
    
    public function testEditPasswordOK()
    {
        $newPassword = 'NewPassword';
        $this->preEditPassword();
        $this->assertTrue($this->object->editPassword($newPassword));
    }
    
    public function testLoginWithNewPasswordOK()
    {
        $newPassword = 'NewPassword';
        $this->preEditPassword();
        $this->assertTrue($this->object->editPassword($newPassword));
        $this->assertTrue($this->object->login($this->login, $newPassword));
    }
}
