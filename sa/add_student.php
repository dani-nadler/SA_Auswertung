<html>
    <body>
        <p>Bitte tragen Sie Ihren Vornamen
            ,Ihren Nachnamen und Ihre E-Mail Adresse ein.
        </p>
        <form action="../db/db_write_student.php" method = "post">
            <p><input name ="stud_id" required="" maxlength="8" autofocus="" placeholder="stud9999"/> Studenten-ID</p>
            <p><input name ="stud_f_name" required="" maxlength="20"/> Vorname</p>
            <p><input name ="stud_l_name" required="" maxlength="40"/> Nachname</p>
            <p><textarea rows="5" cols="50" name ="stud_notice" maxlength="255" >

                
                </textarea> Notizen</p>
            
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
            <p><input type="submit"/>
                <input type="reset"/></p>
        </form>
        
        <p>Alle Studenten <a href="students.php">anzeigen</a></p> 
        <p>Alle Klassen <a href="class_list.php">anzeigen</a></p>
        <p>Klasse <a href="add_class.php">hinzufügen</a></p> 
    </body>
</html>

