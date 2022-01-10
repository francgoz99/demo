<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
   //Pre-built math functions
echo rand(1, 1000);
echo "<br>";
echo ceil(5.9);
echo "<br>";

echo round(2, 3);
echo "<br>";

echo pow(3,4);
echo "<br>";

//Pre-built string functions
   $num = 5;
   $location= 'tree';
   $format ='There are %d monkeys in the %s';
   $string= "I am travelling tomorrow";
   echo strlen($string);
   echo "<br>";
   $valueLength= strlen($string);
   echo $valueLength . "<br>";

   echo sprintf($format, $num, $location);
   echo "<br>";

   //Pre-built array functions

$numbers = [23,45,50,100,150,250,345,455];
$values = ['sadfasf', 34535, 'eewerwr', 34535];
$found = in_array($string,$values);

if ($found){
    echo "Wow, we did it together";
} else{
    echo "We messed up, we could not find it";
}
echo "<br>";
   echo max($numbers);
   echo "<br>";

   echo min($numbers);
   echo "<br>";

    sort($numbers);
    print_r($numbers);
    echo "<br>";

    $a= array('green', 'red', 'yellow');
    $b= array('avocado', 'apple', 'banana');
    $c=array_combine($a,$b);
    print_r($c);







   ?> 
   

</body>
</html>