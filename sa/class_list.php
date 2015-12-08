<html>
    <head>
        <title>TicSys</title>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/application.css">
    </head>
    <body>
        <div id="wrap">
        <form method = "get">
            <p>
                <select name="classes">
                    
                    <?php
                    $classes = "B15-is5.1";
                    include_once 'klassen.php';
                    while ($dsatz = mysqli_fetch_assoc($res)) {
                        echo "<option value=" . $dsatz["classId"] . ">" . $dsatz["classId"] . "</option>";
                    } 
                    ?>
                </select>Klasse
            </p>   
            <p><input type="submit" value="Klassenliste laden"/></p>
        </form>
                <?php
        include_once '../db/connection.php';
        $result = mysqli_query($db, "SELECT DISTINCT * FROM (coupler join class ON class.classId=coupler.claId)JOIN student ON student.studentId=coupler.stuId WHERE claId = '$_GET[classes]' ");


        echo "<table border='1' style='width:100%' class='class-list'>";
        echo "<tr class='title'> <td>Stud-ID</td><td>Vorname</td><td>Name</td><td>Erstelldatum</td><td>Aktiv</td><td>Notizen</td><td>Klasse</td>";
        
        while ($dsatz = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo "<td>" . $dsatz["studentId"] . "</td>";
            echo "<td>" . $dsatz["stu_first_name"] . "</td>";
            echo "<td>" . $dsatz["stu_last_name"] . "</td>";
            echo "<td>" . $dsatz["stu_create_date"] . "</td>";
            if($dsatz["stu_active"]=1){
                echo "<td>Ja</td>";
            }
            else{
                echo "<td>Nein</td>";
            }
            echo "<td>" . $dsatz["stu_comment"] . "</td>";
            echo "<td>" . $dsatz["claId"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        
        mysqli_close($db);
        ?>    
        </div>
    </body>
</html>