<?php

class User
{

    public function register($login, $password)
    {
        if (!empty($login) && !empty($password))
        {
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            return true;
        } else
        {
            return false;
        }
    }

    public function login($login, $password)
    {
        if($_SESSION['login'] == $login
                and $_SESSION['password'] == $password)
        {    
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function editPassword($newPassword)
    {
        $_SESSION['password'] = $newPassword;
        return true;
    }

}