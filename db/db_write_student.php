<?php

include_once 'connection.php';

if (strlen(trim($_POST['stud_id'])) == 8) {
    $eintrag = "INSERT INTO student(studentId, stu_first_name, stu_last_name, stu_comment)
    VALUES('$_POST[stud_id]', '$_POST[stud_f_name]', '$_POST[stud_l_name]', '$_POST[stud_notice]')";
    $eintrag2 = "INSERT INTO coupler(stuId, claId) VALUES('$_POST[stud_id]', '$_POST[classes]')";
    $eintragen = mysqli_query($db, $eintrag);
    $eintragen2 = mysqli_query($db, $eintrag2);
    if ($eintragen == true && $eintragen2 == true) {
        echo "Eintrag war erfolgreich";
    } else {
        echo "Fehler beim Speichern";
    }
}

