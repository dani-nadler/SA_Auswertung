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
        $res = mysqli_query($db, "select * from student");
        
        echo "<table border='1'>";
        $lf = 1;
        while ($dsatz = mysqli_fetch_assoc($res)){
        
        echo "<tr>";
        echo "<td>$lf</td>";
        echo "<td>" . $dsatz["studentId"] . "</td>";
        echo "<td>" . $dsatz["stu_first_name"] . "</td>";
        echo "<td>" . $dsatz["stu_last_name"] . "</td>";
        echo "<td>" . $dsatz["stu_create_date"] . "</td>";
        echo "<td>" . $dsatz["stu_active"] . "</td>";
        echo "<td>" . $dsatz["stu_comment"] . "</td>";
        echo "</tr>";
        $lf = $lf + 1;
        }
        
        echo "</table>";
        
        mysqli_close($db);
        ?>    
        </div>
    </body>
</html>