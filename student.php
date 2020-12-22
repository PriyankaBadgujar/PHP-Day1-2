<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       class student
       {
           private $name;
           private $studid;
           private $city;
           private $dept;
        
           public function set_name($name)
           {
            $this->name=$name;
           }
           public function set_id($studid)
           {
            $this->studid=$studid;
           }
           public function set_city($city)
           {
            $this->city=$city;
           }
           public function set_dept($dept)
           {
            $this->dept=$dept;
           }

           function get_name()
           {
               return "Name: ".$this->name;
           }
           
           function get_id()
           {
               return "Student id : ".$this->studid;
           }
           function get_city()
           {
               return"City : ". $this->city;
           }
           
           function get_dept()
           {
               return"Department : ". $this->dept;
           }
          

        function showGrade($m1,$m2,$m3)
        {
            $average=($m1+$m2+$m3)/3;
            if($average>=90)
            {
                echo "Grade is A+";
            }
            else if($average>=80 &&$average<90 )
            {
                echo "Grade is B";
            }
            else if($average>=70 && $average<80)
            {
                echo"Grade is C";
            }
            else
            {
                echo "Fail";
            }

        }
        function printDetails()
           {
             echo $this->name."<br>";
             echo $this->studid."<br>";
             echo $this->city."<br>";
             echo $this->dept."<br>";
           }
       }

       $stud=new student();
      
       echo $stud->set_name("Priyanka")."<br>";
       echo $stud->get_name()."<br>";
       echo $stud->set_id(315)."<br>";
       echo $stud->get_id()."<br>";
       echo $stud->set_city("Mumbai")."<br>";
       echo $stud->get_city()."<br>";
       echo $stud->set_dept("CS")."<br>";
       echo $stud->get_dept()."<br>";
       $stud->showGrade(90,82,78);

       $stud1=new student();
       
       echo $stud1->set_name("Pihu")."<br>";
       echo $stud1->get_name()."<br>";
       echo $stud1->set_id(315)."<br>";
       echo $stud1->get_id()."<br>";
       echo $stud1->set_city("Pune")."<br>";
       echo $stud1->get_city()."<br>";
       echo $stud1->set_dept("IT")."<br>";
       echo $stud1->get_dept()."<br>";
       $stud->showGrade(50,62,88);
      
       ?>
</body>
</html>