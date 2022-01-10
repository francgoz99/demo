
<?php
//CLASS CONSTRUCTORS

class Car
{

    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function showProperty()
    {
        //echo "Wheels move";
        echo $this->engine;
    }
}
$bmw = new Car();
$semi = new Semi();

class Semi extends Car{
    /*function showProperty()
    {
        //echo "Wheels move";
        echo $this->hood;
    }*/
}
//echo $semi->showProperty();
echo $bmw->showProperty();

//echo $bmw->hood;
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
