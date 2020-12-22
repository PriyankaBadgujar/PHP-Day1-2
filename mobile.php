<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Mobile
    {
        public $brand;
       public $model;
        public $price;
        static $accessories=array("Charger","Ear-phones");

        public function __construct($brand,$model,$price)
        {
            $this->brand="<h2>Brand $brand</h2>";
         
            $this->model="<h3>Model is:$model</h3>"."<br>";
            $this->price=$price;
        }
        public function __destruct()
        {
            echo "Called before closing the script";
        }
        function printDetails()
        {
            echo $this->brand."<br>";
            echo $this->model."<br>";
            echo $this->price."<br>";
           
            foreach(mobile::$accessories as $val)
            {
                echo "Accessories:",$val,"<br>","<br>";
                
            }
        }
            function showDicountedprice($amount)

            {
                $amount=($amount/100)*$this->price;
                echo "Total Price after discount: ",($this->price)-$amount,"<br>";
                
            }
           

            
        }
        $mobile1=new Mobile("Samsung","M31s",20000);
        $mobile1->printDetails();
        $mobile1->showDicountedprice(30);
        
        $mobile2=new Mobile("MI","Note 9",15000);
        $mobile2->printDetails();
        $mobile2->showDicountedprice(20);
    
    
    ?>
</body>
</html>