<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

$title = "Weigh In";

if (login_check($mysqli) == true) {
    $user = $_SESSION['username'];

    include_once('lib/Include/BaseCenter.php');
    if (date("D", time()) == "Sun") {
        include_once('lib/PageInclude/Weigh.php');
    } else {
        echo('<div class="alert alert-danger" role="alert"><strong>Error: </strong> You may only weigh in on Sunday\'s</div>');
    }
    include_once('lib/Include/End.php');
} else {
    header('Location: /index');
}