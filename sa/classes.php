<html>
    <body>
        <?php
        include_once '../db/connection.php';
        $res = mysqli_query($db, "select classId from class");
        while ($dsatz = mysqli_fetch_assoc($res)){
            echo "<>" . $dsatz["classId"] . "</td><br>";
        }
        ?>    
    </body>
</html>