<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

$title = "Home";
if (isset($_GET['a'])) {
    $user = $_SESSION['username'];
    include_once('lib/Include/Base.php');
    include_once('lib/PageInclude/Index.php');
    include_once('lib/Include/End.php');
} else {
    if (login_check($mysqli) == true) {
        header('Location: /dashboard');
    } else {
        header('Location: /login');
    }
}