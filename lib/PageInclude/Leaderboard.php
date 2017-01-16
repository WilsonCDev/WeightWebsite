<div id="currentWeek">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = google.visualization.arrayToDataTable([
                ['Name', 'Percent Lost'],
                ['U1', 81],
                ['U2', 37],
                ['U3', 26],
                ['U4', 20],
                ['U5', 15]
            ]);

            var options = {
                title: 'Percentage Lost This Week',
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'Percent Lost',
                    minValue: 0,
                    maxValue: 100
                },
                vAxis: {
                    title: 'Name'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('current'));

            chart.draw(data, options);
        }
    </script>

    <div align="center" id="current"></div>
</div>
<div id="combo">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);


        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Week', 'Christopher', 'Debbie', 'John', 'Jim', 'Bat', 'Tara', 'Average'],
                ['Week 1', 30, 30, 30, 30, 30, 30, 1],
                ['Week 2', 30, 30, 30, 30, 30, 30, 1],
                ['Week 3', 30, 30, 30, 30, 30, 30, 1],
                ['Week 4', 30, 30, 30, 30, 30, 30, 1],
                ['Week 5', 30, 30, 30, 30, 30, 30, 1]
            ]);

            var options = {
                title : 'Overall',
                vAxis: {title: 'Percent Lost'},
                hAxis: {title: 'Week'},
                seriesType: 'bars',
                series: {6: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('combo_div'));
            chart.draw(data, options);
        }
    </script>
    <div id="combo_div" style="width: 900px; height: 500px;"></div>
</div>
