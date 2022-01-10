<?php include "functions.php";?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'mylist');
if (!$connection){
    die("Database Connection Failure") . mysqli_error($connection);
}

$query = "SELECT * FROM reports";
$result = mysqli_query($connection,$query);
if (!$result){
    die("QUERY FAILED");
}
?>
<?php include "includes/header.php"?>

<?php
while ($record= mysqli_fetch_assoc($result)){
    // print_r($record);
    echo $record['days_of_the_week'];
}

?>
