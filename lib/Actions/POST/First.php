<?php

include_once('../../config.php');

$username = $_POST['username'];
$name = $_POST['name'];

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "UPDATE wcd_weight.users SET `name` = '" . $name . "' WHERE `username` = '" . $username . "';";
if ($con->query($sql) == true) {
    header('Location: /dashboard');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
