<?php

require_once 'connection.php';
require_once 'SRC/User.php';

var_dump(User::loadAllUsers($mysqli));

$user = new User;
$user->setUsername('Super_Dupa');
$user->setEmail('lubiekartony@gmail.com');
//$user->setPassword('qwerty');
$user->saveToDB($mysqli);
var_dump($user);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

