<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="demo.php" method="get">
    Enter name<input type="text" name="username"><br>
   
    Select course <select name="choice">
	<option>select</option>
	<option value="Java">Java</option>
	<option value="Python">Python</option>
	<option value="CSS">CSS</option>
    <option value="JS">JS</option>
        </select>
        <input type="submit" value="suggest">
        
        </form>
        <?php 
        $name=$_GET["username"];
        $courseName=$_GET["choice"];
        switch($courseName){
            case 'Java';
            $price=1000;
            $duration="3 Month";
            include "java.php";
                break;
                
            case 'Python';
            $price=2200;
            $duration="3 Month";
            include "python.php";
                break; 

            case 'CSS';
            $price=500;
            $duration="1 Month";
            include "css.php";
                break; 

            case 'JS';
            $price=1000;
            $duration="1 Month";
            include "ja.php";
                break;  

            default:
                echo "Please Enter Course name"  ;
            }
         
       
//         if($courseName=="Java"){
//             $price=1000;
//         $duration="1 Month";

//             include "demo1.php";
//        }
//       else if($courseName=="CSS"){
//         $price=500;
//     $duration="2 Month";

//         include "demo1.php";
//    }
//   else if($courseName=="Python"){
//     $price=2000;
// $duration="3 Month";

//     include "demo1.php";
// }
// else if($courseName=="JS"){
//     $price=500;
// $duration="1 Month";

//     include "demo1.php";
// }
// else{
//     echo 'please Select course';
// }
        
         ?>
</body>
</html>