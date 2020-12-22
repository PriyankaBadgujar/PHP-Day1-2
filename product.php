<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Product{
        public $brand;
        public $price;
        public $quantity;


    function __construct($brand,$price,$quantity)
    {
        $this->brand=$brand;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    function totalCost()
    {
        echo "Total Price for 2 HP Laptops:" ,( $this->price * $this->quantity),"<br>";
    }
    }
    
    class Laptop extends Product
    {
       public $accessories=array("charger","mouse");

    function showAccessories(){
        foreach($this->accessories as $val){
            echo "accessories:" ,$val,"<br>";
        }
        
    }

    }
    $l1=new Laptop("HP",50000,2);
    $l1-> totalCost();
    $l1-> showAccessories();
    
    ?>
</body>
</html>