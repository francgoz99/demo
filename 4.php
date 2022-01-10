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
  /* function calculation($num1, $num2){
       $sum = $num1 + $num2;
       return $sum;

   }
   $result = calculation(23,45);
   echo $result; */
   echo "<br>";

   function calculation(){
       $number_1=20;
       $number_2=50;
       $sum = $number_1 + $number_2;
       return $sum;
   }
   $theSum = calculation();
   echo "<br>";


   function subtractNumber($number1, $number2){
       $minus = $number1 - $number2;
       echo $minus;

   }
   subtractNumber(34,15);

   echo "<br>";
   function hola($hello){
       echo $hello;
   }
   hola("Hey its that spanish?");



   ?> 
   

</body>
</html>