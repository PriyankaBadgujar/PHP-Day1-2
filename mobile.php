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
        public $price;
        public $model;
        static $accessories=array("Charger","Ear-phones");

        public function __construct($brand,$model)
        {
            $this->brand="<h2>Brand $brand</h2>";
            $this->model="<h3>Model is:$model</h3>"."<br>";
        }
        public function __destruct()
        {
            echo "Called before closing the script";
        }
        function printDetails()
        {
            echo $this->brand."<br>";
            echo $this->model."<br>";
           
            foreach(mobile::$accessories as $val)
            {
                echo "Accessories:",$val,"<br>","<br>";
                
            }
        }
            public static function showDicountedprice($amount,$price)
            {
                echo "Price Of mobile is:",$price,"<br>";
                $amount=($amount/100)*$price;
                echo "Total discounted price:",$price-$amount,"<br>";
                
            }
           

            
        }
        $mobile1=new mobile("Samsung","M31s");
        $mobile1->printDetails();
        mobile::showDicountedprice(30,20000);
        
        $mobile2=new mobile("MI","Note 9");
        $mobile2->printDetails();
        mobile::showDicountedprice(20,15000);
    
    
    ?>
</body>
</html>