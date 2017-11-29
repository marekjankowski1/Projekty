<?php

require 'src/connection.php';

class TestProduct extends PHPUnit_Framework_TestCase
{
    public function testGetImages()
    {
        $id = 1;
        $name = 'Kaczuszka';
        $price = 5.0;
        $description = 'Opis kaczuszka';

        $product = new Product($id, $name, $price, $description);
        print_r($product->getImages());
        $this->assertEquals('kaczuszka.jpg', $product->getImages()[0]['path']);
    }
}