<html>
    <body>
        <p>Bitte tragen Sie Ihren Vornamen
            ,Ihren Nachnamen und Ihre E-Mail Adresse ein.
        </p>
        <form action="../db/db_write_exam.php" method = "post">
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
            
            <p><input name ="exa_name" autofocus="" maxlength="20"/> Prüfungs-Bezeichung</p>
            <p><input name ="exa_nummer" required="" maxlength="1"/> Prüfungs-Nummer (1-9)</p>
            <p><input name ="exa_max_points" required="" maxlength="4"/> Maximale Punktzahl (1-9999)</p>
            <p><input name ="exa_nec_points" required="" maxlength="4"/> Notwendige Punktzahl für Note 6</p>
            <p><input name ="exa_note_key" required="" maxlength="20"/> Notenschlüssel</p>
            <p><input name ="exa_sub_id" required="" maxlength="4"/> Fach-id (4-Stellig)</p>
            <p><input name ="exa_sub_name" maxlength="20"/> Fach-Bezeichung</p>
            <p><input type="date" name ="exa_date" required="" /> Datum</p>
            <p><label for="true">Normale Prüfung</label>
            <input type="radio" id="SP" name="exa_reg" value="1">
            <label for="false">Nachprüfung</label>
            <input type="radio" id="NP" name="exa_reg" value="0"></p>
            <p><textarea rows="5" cols="50" name ="exa_comment" maxlength="255" >

                
                </textarea> Notizen</p>
            
            
            <p><input type="submit"/>
                <input type="reset"/></p>
        </form>
        
        <p>Alle Studenten <a href="students.php">anzeigen</a></p> 
        <p>Alle Klassen <a href="class_list.php">anzeigen</a></p>
        <p>Klasse <a href="add_class.php">hinzufügen</a></p>
        <p>Student <a href="add_student.php">hinzufügen</a></p>
    </body>
</html>

