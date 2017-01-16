<?php

include_once('../../config.php');

$username = $_POST['username'];
$weight = $_POST['weight'];
$time = time();

$con = new mysqli(HOST, USER, PASS, DB);

if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
}

$sql = "INSERT INTO wcd_weight.weight (user, weight, time) VALUES ('" . $username . "', '" . $weight . "', '" . $time . "')";
if ($con->query($sql) == true) {
    header('Location: /dashboard');
} else {
    echo "Error: " . $sql . "<br /><br />" . $con->error;
}
