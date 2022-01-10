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
   $number = 10;
   $number = 1000;

   $number = "Goz";
   echo $number. "<br>";

   define("NAME", 1000);

   echo NAME;

   //New way to create constants

  // const CONSTANT ='Hello World';

   //Assigning an array
   //const ANIMALS = array('dog','cat','bird');

   //Works as of PHP 5.3.0
   echo "<br>";
   const CONSTANT = 'Hello World';

   echo CONSTANT;

   echo "<br>";

   //Works as of PHP 5.6.0
   const ANOTHER_CONST = CONSTANT.'; Goodbye World';

   echo ANOTHER_CONST;

   echo "<br>";

   //const ANIMALS = array('dog','cat','bird');
 //  echo ANIMALS[1]; //Outputs cat

   echo "<br>";

   //Works as of PHP 7
   define('ANIMALS', array('dog','cat','bird'));
   echo ANIMALS[1];




   ?> 
   

</body>
</html>