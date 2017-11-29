<?php

class BankAccount {
    private $number;
    private $cash;
    static private $nextAccNumber = 1;

    public function __construct() {
        $this->number = self::$nextAccNumber;
        self::$nextAccNumber++;
        $this->cash = 0.0;
        echo "Twój numer konta: $this->number.<br>";
    }

    public function getNumber() {
        return $this->number;
    }

    public function getCash() {
        return $this->cash;
    }

    public function depositCash($amount) {
        if (is_numeric($amount) && $amount > 0) {
            $this->cash += $amount;
        }
        return $this;
    }
    
    public function withdrawCash($amount) {
        if (is_numeric($amount) && $amount > 0) {
            if ($amount > $this->cash) {
                $withdraw = $this->cash;
            }
            else {
                $withdraw = $amount;
            }
            $this->cash -= $withdraw;
            return $withdraw;
        }
    }
    
    public function printInfo() {
        echo $this->cash;
    }
}