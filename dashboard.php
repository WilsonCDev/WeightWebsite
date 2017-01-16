<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

$title = "Dashboard";
$user = $_SESSION['username'];

include_once('lib/Include/BaseDash.php');
include_once('lib/PageInclude/Dashboard.php');
include_once('lib/Include/End.php');