<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Czy to jes ok?
$DB_HOST = "127.0.0.1";
$DB_USER = "root";
$DB_PASSWORD = "coderslab";
$DB_DBNAME = "twitter";


$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DBNAME);
 
if ($mysqli->connect_error) {
    die('Cos sie popsulo...' . $mysqli->connect_error);
 
} else {
    echo 'Udalo sie polaczyc...' . PHP_EOL;
    
}

