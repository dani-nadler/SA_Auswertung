<html>
    <body>
        <form action="../db/db_write_class.php" method = "post">
            <p><input name ="class_id" required="" maxlength="9" autofocus="" placeholder="B15-if5.1"/> Klassen-ID</p>
            <p><input name ="cla_semester" required="" maxlength="20"/> Semester</p>
            <p><input name ="cla_jahr" required="" maxlength="40"/> Jahr</p>
            <p><textarea rows="5" cols="50" name ="cla_comment" maxlength="255" >

                
                </textarea> Notizen</p>
            
                <p><input type="submit"/>
                <input type="reset"/></p>
        </form>
        
        <p>Alle Studenten <a href="students.php">anzeigen</a></p> 
        <p>Alle Klassen <a href="class_list.php">anzeigen</a></p>
        <p>Student <a href="add_student.php">hinzufügen</a></p>
        <p>Prüfung <a href="add_exam.php">hinzufügen</a></p>
        <p>Resultat <a href="add_result.php">hinzufügen</a></p>
    </body>
</html>

