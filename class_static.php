﻿
<?php
//STATIC DATA IN CLASSES.

class Car{
    //Adding properties to class
    static $wheels = 4;
    var $hood = 1;


    function MoveWheels(){
        //echo "Wheels move";
        Car::$wheels=10;
    }


}

$bmw =new Car();
//$bmw->wheels;
Car::MoveWheels();
echo Car::$wheels;




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
