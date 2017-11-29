<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ubuntu
 */
class User {
    

    private $id;
    private $username;
    private $hashedPassword;
    private $email;
    
    public function __construct() {
        $this->id = -1;
        $this->username = "";
        $this->email = "";
        $this->hashedPassword = "";
    }
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getHashedPassword() {
        return $this->hashedPassword;
    }

    function getEmail() {
        return $this->email;
    }

    function setUsername($username) {
        $this->username = $username;
    }

        
    public function setPassword($newPassword)
{
$newHashedPassword =
password_hash($newPassword,
PASSWORD_BCRYPT);
$this->hashedPassword =
$newHashedPassword;
}

    function setEmail($email) {
        $this->email = $email;
    }
    // wyłączyliśmy tą funkcję, bo napisaliśmy ją od nowa dalej
   //* public function saveToDB(mysqli $connection) // czy tu i dalej ma byc $mysqli czy $connection?
   // {
     //   $flag = true; // dobrą praktyką jest w momencie tworzenia zmiennych nadawanie juz im wartosci
       // $flag = $this->id == -1 ? true : false;
        
        //if ($flag ) { //nie musimy juz tu pisac ze =true, bo if reaguje na typy logiczne
            
          //  $sql = "INSERT INTO users(username, email, hashed_password)VALUES
            //        ('$this->username ' , '$this->email' , '$this->hashedPassword')";
              //         $result =  $connection->query($sql); //DB zwraca nam id wstawionego uzytkownika
                //    if ($result) {
                  //      $this->id = $connection->insert_id;
                    //    return true; //wpisujemy to, żeby mieć możliwość odczytania czy to poprawnie działa
                   // }
                    
                    
        
        
           // return false;
      //  }
   // }
    
    static public function loadUserByID(mysqli $connection, $id)
            {
        
$sql = "SELECT * FROM users WHERE id=" . (int)$id; // int zabezpiecza nam to, że wprowadzona zostanie liczba

$result = $connection->query($sql);

if($result == true && $result->num_rows == 1){ // sprawdzamy czy liczba wierszy wyniku jest równa jeden, 
//żeby nikt nie wstrzyknął nam więcej danych
    
$row = $result->fetch_assoc(); //nasze rezultaty zostaną przypisane do tablicy asocjacyjnej

$loadedUser = new User(); //tworzymy nowego użytkownika

$loadedUser->id = $row['id']; //przypisujemy mu wartości z tablicy

$loadedUser->username = $row['username'];

$loadedUser->hashedPassword = $row['hashed_password'];

$loadedUser->email = $row['email'];

return $loadedUser; //zwracamy obiekt, aby móc go wykorzystywać w dalszej części programu,
// inaczej zostałby zniszczony po użyciu
}
return null; 
}

static public function loadAllUsers(mysqli $connection)
        { 

$sql = "SELECT * FROM users";

$ret = []; //tablica do której będziemy wrzucać wyniki tworzona przed foreachem

$result = $connection->query($sql);

if($result == true && $result->num_rows != 0){
    
foreach($result as $row){
    
$loadedUser = new User();

$loadedUser->id = $row['id'];

$loadedUser->username = $row['username'];

$loadedUser->hashedPassword = $row['hashed_password'];

$loadedUser->email = $row['email'];

$ret[] = $loadedUser;
}
}
return $ret;
        }
        
        public function saveToDB(mysqli $connection){
            
if($this->id == -1){

    $sql= "INSERT INTO users(username,email,hashed_password) VALUES ('$this->username', 
            '$this->email', '$this->hashedPassword')";
}
else{
    
$sql = "UPDATE users SET username='$this->username',
    
email='$this->email',
    
hashed_password='$this->hashedPassword'
    
WHERE id=$this->id";

$result = $connection->query($sql);

if($result == true){
    
return true;
}
}
return false;
}
}