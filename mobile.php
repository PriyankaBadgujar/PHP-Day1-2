<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class mobile
    {
        public $brand;
       
        public $model;
        public $price;
        static $accessories=array("Charger","Ear-phones");

        public function __construct($brand,$price,$model)
        {
            $this->brand="<h2>Brand $brand</h2>";
         
            $this->model="<h3>Model is:$model</h3>"."<br>";
            $this->price="<h3>Price is:$price</h3>"."<br>";
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
            public  function showDicountedprice($amount)

            {
                $amount=($amount/100)*$this->price;
               echo "price after discount: ",($this->price)-$amount,"<br>";
                
            }
           

            
        }
        $mobile1=new mobile("Samsung",20000,"M31s");
        $mobile1->printDetails();
        $mobile1->showDicountedprice(30);
        
        $mobile2=new mobile("MI",15000,"Note 9");
        $mobile2->printDetails();
        $mobile2->showDicountedprice(20);
    
    
    ?>
</body>
</html>