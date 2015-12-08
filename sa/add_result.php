<html>
    <body>
        <p>Bitte tragen Sie Ihren Vornamen
            ,Ihren Nachnamen und Ihre E-Mail Adresse ein.
        </p>
        <form action="../db/db_write_result.php" method = "post">
            <p>
<select name="classes">
    <?php
    include_once 'klassen.php';
    while ($dsatz = mysqli_fetch_assoc($res)){
            echo "<option value=" . $dsatz["classId"] . ">" . $dsatz["classId"] . "</option>";
        }
    ?>
</select>Klasse
</p>
            
            <p><input name ="res_points" autofocus="" maxlength="4"/> Erreichte Punktzahl</p>
            <p><label for="present">Anwesend</label>
                <input type="checkbox" id="present" name="res_present" value="Anwesend" checked></p>
            <p><textarea rows="5" cols="50" name ="res_comment" maxlength="255" >

                
                </textarea> Notizen</p>
            
            
            <p><input type="submit"/>
                <input type="reset"/></p>
        </form>
        
        <p>Alle Studenten <a href="students.php">anzeigen</a></p> 
        <p>Alle Klassen <a href="class_list.php">anzeigen</a></p>
        <p>Klasse <a href="add_class.php">hinzufügen</a></p>
        <p>Student <a href="add_student.php">hinzufügen</a></p>
        <p>Prüfung <a href="add_exam.php">hinzufügen</a></p>
    </body>
</html>

