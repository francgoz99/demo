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

  if (3 > 1){
      echo "I love PHP";

  } elseif (20 < 10) {
      echo "bgdhgdh";
  } else{
      echo "bjbfdj";

  }
  echo "<br>";

  //FOR LOOP
   for ($i=0; $i <= 10; $i++ ){
       echo $i;
   }
   echo "<br>";

   for ($counter = 0; $counter < 10; $counter++){
       echo $counter . "<br>";
   }

// Switch statement
   $number = 20;
   switch ($number){
       case 10:
           echo "It is 20";
           break;
       case 12:
           echo "It is 20";
           break;
       case 14:
           echo "It is 20";
           break;
       case 15:
           echo "It is 20";
           break;
       default:
           echo "Nothing was found";
   }

   ?> 
   

</body>
</html>