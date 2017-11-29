<?php

class Product

{
    private $id;
    private $name;
    private $price;
    private $decription;
    private $images;
    private $connection;
    
    public static function SetConnection($newConnection){
    
        Product::$conn = $newConnection;
    }
    
    
    public function __construct($id, $name, $price, $description)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->description=$description;
        $this->images=$this->getImagesFromDB();
    }
    private function getImagesFromDB()
            
    {
        $this->images = [];
        $sqlStatement = "Select * from Images where product_id = '$this->id'";
        $result = Product::$conn->query($sqlStatement);
        echo "***ilość wierszy = " . $result->num_rows;
        if ($result->num_rows !=0) {
            $images[] = $result->fetch_assoc();
        }
            return $images;
        }
        
        public function getImages()
        {
            return $this->images;
        }
        
        
  
}
