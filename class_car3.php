
<?php
//How to instantiate a class.

class Car{
    //Adding properties to class
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){
        //echo "Wheels move";
        $this ->wheels=10;
    }
    function CreateDoors(){
        $this->doors = 6;
    }

}

$bmw =new Car();
$truck = new Car();

echo $bmw ->wheels . "<br>";
echo $truck -> wheels =10 . "<br>";

$truck -> CreateDoors();

echo $truck ->doors;
//$merces_benz = new Car();

//$bmw ->MoveWheels();
//$merces_benz ->MoveWheels();
//$bmw ->MoveWheels();
//echo $bmw -> wheels;



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
