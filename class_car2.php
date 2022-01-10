
<?php
//Class methods and how to create them.

class Car{

    function MoveWheels(){
        echo "Wheels move";
    }

}

if (method_exists("Car", "Movewheels")){
    echo "The method exists";
} else{
   echo "No, it does not";
}


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
