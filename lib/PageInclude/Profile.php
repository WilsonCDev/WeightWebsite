<?php
include_once('../Functions.php');
include_once('../config.php');
include_once('../DBConnect.php');
include_once('../AuthFunctions.php');
?>
<h1>Current Weight: <small><?php echo getCurrentWeight($user); ?></small></h1>
<h1>Starting Weight: <small><?php echo getStartingWeight($user); ?></small></h1>
<h1>Overall Percent Lost: <small><?php echo calculateOverallLoss($user); ?>%</small></h1>
<h1>Percent Since Last Weigh In: <small><?php echo calculateSinceLast($user); ?>%</small></h1>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'Week');
        data.addColumn('number', 'Weight');

        data.addRows([
            [1, <?php echo getStartingWeight($user); ?>],
            <?php
            $con = mysql_connect(HOST, USER, PASS);
            mysql_select_db(DB, $con);

            $res = mysql_query("SELECT * FROM wcd_weight.weight");

            $count = mysql_num_rows($res);
            $row = 0;

            while ($row = mysql_fetch_array($res)) {
                $row++;
                echo('[');
                echo(date("W", $row['time']));
                echo(',');
                echo($row['weight']);
                echo(']');
                if ($row != $count) {
                    echo(',');
                }
            }
            ?>
        ]);

        var options = {
            hAxis: {
                title: 'Week'
            },
            vAxis: {
                title: 'Weight'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart'));

        chart.draw(data, options);
    }
</script>

<div id="chart"></div>