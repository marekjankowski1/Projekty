<?php

class Calculator {
    public $operationHistory = [];
    
    public function __construct() {

        }
    
    public function add($num1,$num2) {
        $result = $num1 + $num2;
        $this->addOperationHistory("added $num1 to $num2 got $result");
        return $result;
    }
    public function multiply($num1,$num2) {
        $result = $num1 * $num2;
        $this->addOperationHistory("multiplied $num1 to $num2 got $result");
        return $result;
    }
    
    public function subtract($num1,$num2) {
        $result = $num1 - $num2;
        $this->operationHistory[] = "subtracted $num2 to $num1 got $result";
        return $result;
    }
    
    //funkcja przyjmuje tablicę
    public function multiplyMany($numbers) {
        $result = 1;
        foreach ($numbers as $number) {
            $result *= $number;
        }
        return $result;
    }
    
    public function divide($num1,$num2) {
        if ($num2 == 0) {
            echo "Błąd dzielenia przez 0!";
            return null;
        }
        $result = $num1 / $num2;
        $this->operationHistory[] = "divided $num1 to $num2 got $result";
        return $result;
    }
    
    public function printOperations() {
        foreach ($this->operationHistory as $operation) {
            echo $operation . "<br>";
        }
        return $this;
    }
    public function clearOperations() {
        $this->operationHistory = [];
        echo "Operacje wyczyszczone";
    }
    
    protected function addOperationHistory($operation) {
        $this->operationHistory[] = $operation;
    }
    
    public function multiplyAnyAndAdd($numbers,$numberToAdd) {
        $temp = $this->multiplyMany($numbers);
        $result = $this->add($temp,$numberToAdd);
        return $result;
    }
}