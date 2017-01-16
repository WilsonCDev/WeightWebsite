<?php

function getCurrentWeight($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM wcd_weight.weight WHERE user = '$user' ORDER BY time DESC LIMIT 1");

    while ($row = mysql_fetch_array($res)) {
        return $row['weight'];
    }

    return 0;
}


function getPreviousWeek($user, $wago) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM wcd_weight.weight WHERE user = '$user' ORDER BY time DESC LIMIT $wago,1");

    while ($row = mysql_fetch_array($res)) {
        return $row['weight'];
    }

    return 0;
}

function getStartingWeight($user) {
    $con = mysql_connect(HOST, USER, PASS);
    mysql_select_db(DB, $con);

    $res = mysql_query("SELECT * FROM wcd_weight.users WHERE username = '$user'");

    while ($row = mysql_fetch_array($res)) {
        return $row['startWeight'];
    }

    return 0;
}

function calculateOverallLoss($user) {
    $current = getCurrentWeight($user);
    $start = getStartingWeight($user);

    $l = $start - $current;
    $l = $l * 100;
    $l = $l / $start;

    return round($l, 1);
}

function calculateSinceLast($user) {
    $current = getCurrentWeight($user);
    $last = getPreviousWeek($user, 1);

    $l = $last - $current;
    $l = $l * 100;
    $l = $l / $last;

    return round($l, 1);
}
