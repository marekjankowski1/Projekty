<?php

interface IShowData
{
    function showData($text);
}
//wstrzykiwanie zależności
//dependency injection 
//display - jest ustawiany dynamicznie podczas życia obiektu
//od niego zalezy dzialanie obiektu 

class Kasa
{
    private $display;
    public function setDisplay(IShowData $display)
    {
        $this->display = $display;
    }
    public function display($text)
    {
        $this->display->showData($text);
    }
}

class Drukarka implements IShowData
{   
    public function showData($text)
    {
        echo "Drukarka drukuje ...<br>";
        echo " bzzz bzzz bzzz<br>";
        echo $text . "<br>";
        echo " koniec drukowania<br>";
    }

}

class LCD implements IShowData
{
    
    public function showData($text)
    {
       echo "LCD READY:<br>";
       echo "..............<br>";
       echo $text . "<br>";
       echo "..............<br>";
    }

}
class SuperExtraTV implements IShowData
{
   public function showData($text)
    {
       echo "Super TV  READY:<br>";
       echo $text . "<br>"; 
    }  
}

echo "<!doctype html>";
echo "  <head>
  <meta charset='UTF-8'>
</head>  ";

$kasa = new Kasa();
$kasa->setDisplay(new LCD());
$kasa->display("Bułka 2.5 zł");
$kasa->display("Chleb krojony 3.5 zł");
$kasa->display("Mleko 3.2% 2.99 zł");

$kasa->setDisplay(new Drukarka());
$kasa->display("Bułka 2.5 zł");
$kasa->display("Chleb krojony 3.5 zł");
$kasa->display("Mleko 3.2% 2.99 zł");

$kasa->setDisplay(new SuperExtraTV());
$kasa->display("Bułka 2.5 zł");
$kasa->display("Chleb krojony 3.5 zł");
$kasa->display("Mleko 3.2% 2.99 zł");
