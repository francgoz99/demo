
<?php
//CLASS INHERITANCE

class Car{

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

class Plane extends Car {
    var $wheels = 20;

}
//if (class_exists("Plane")){
    //echo "it does";
//}
$jet = new Plane();
$jet->MoveWheels();
echo $jet->wheels;



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
