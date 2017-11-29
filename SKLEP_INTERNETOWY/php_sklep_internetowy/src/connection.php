<?php
require("Product.php");


$configDB = array(
    'servername' => "127.0.0.1",
    'username' => "root",
    'password' => "coderslab",
    'baseName' => "sklep_internetowy"
);

// Tworzymy nowe połączenie
$conn = new mysqli($configDB['servername'], $configDB['username'], $configDB['password'], $configDB['baseName']);
// Sprawdzamy czy połączcenie się udało
if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error."<br>");
}


//setting connections for Models
User::SetConnection($conn);

?>