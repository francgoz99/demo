
<?php
//How to instantiate a class.

class Dog{
    //Adding properties to class
    var $eyeColors = "Blue";
    var $noseColor = "black";
    var $furColor = "brown";


    function ShowAll(){
        //echo "Wheels move";
       echo $this -> eyeColors . "<br>";
        echo $this -> noseColor . "<br>";
       echo $this -> furColor. "<br>";

    }


}
$pitball = new Dog();
echo $pitball ->ShowAll();





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>
