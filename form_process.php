<?php
if (isset($_POST['submit'])) {
    $name = array("Edwin", "Student", "Peter", "Samid", "Mohab", "Maria", "Jane", "tom");
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than five";
    }
    if (strlen($username) > $maximum) {
        echo "Username cannot be longer than 10";
    }
    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed to login";

    } else {
        echo "Welcome";
    }

// echo "Hello" . $username;
    echo "<br>";
//echo "Your Password is " . $password;

}

?>