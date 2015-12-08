<html>
    <head>
        <title>TicSys</title>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/application.css">
    </head>
    <body>
        <div id="wrap">

            <?php
            include_once '../db/connection.php';
            $results = mysqli_query($db, "SELECT DISTINCT claId, COUNT(distinct stuId) AS nmbrOfStudents FROM coupler GROUP BY claId");

            $pie_chart_data = array();
            $column_chart_data = array();
            
            $colors = array("#FF0000", "#00FF00", "#f0f0f0", "a1b1c1");

            $id = 0;
            foreach ($results as $result) {
                $pie_chart_data[] = array($result['claId'], (int) $result['nmbrOfStudents']);
                $column_chart_data[] = array($result['claId'], (int) $result['nmbrOfStudents'], $colors[$id]);
                $id ++;
            }

            $pie_chart_data = json_encode($pie_chart_data);
            $column_chart_data = json_encode($column_chart_data);

            mysqli_close($db);
            ?>    
        </div>
    </body>
</html>