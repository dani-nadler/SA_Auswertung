<?php

include_once 'connection.php';

if (strlen(trim($_POST['class_id'])) == 9) {
    $classid = $_POST['class_id'];
    $eintrag = "INSERT INTO class(classId, cla_semester, cla_year, cla_comment)
    VALUES('$_POST[class_id]', '$_POST[cla_semester]', '$_POST[cla_jahr]', '$_POST[cla_comment]')";
    $eintragen = mysqli_query($db, $eintrag);
    if ($eintragen == true) {
        echo "Eintrag war erfolgreich";
    } else {
        echo "Fehler beim Speichern";
    }
}

