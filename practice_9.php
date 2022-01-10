
<?php
/*Create a link saying Click Here, and set
the link href to pass some parameters and use the GET super global to
see it.
*/
if (isset($_GET['source'])){
    echo $_GET['source'] . "<br>";
}

?>
<a href="practice_9.php?source=30134">CLICK HERE</a>
<br>
<?php

/* Set a cookie that expires in one week*/
$cookie = "SomeExercise";
$value = "This is an exercise";
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($cookie,$value,$expiration);

if(isset($_COOKIE["SomeExercise"])){
    echo $_COOKIE["SomeExercise"] . "<br>" ;
}
echo "<br>";

/*Start a session and set it to a value that you want.*/
session_start();


$_SESSION['Welcome'] = "Hello Welcome Student";

if (isset($_SESSION['Welcome'])){
    echo $_SESSION['Welcome'];
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
<?php

?>

</body>
</html>
