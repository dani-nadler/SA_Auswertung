<?php

include_once 'connection.php';

//echo $_POST[exa_reg];

    if (strlen(trim($_POST['classes'])) == 9) {
    $eintrag = "INSERT INTO exam(claId, exa_name, exa_number, exa_max_points, exa_necessary_points, exa_note_key, exa_subject_id, exa_subject_name, exa_date, exa_regular, exa_comment)
    VALUES('$_POST[classes]', '$_POST[exa_name]', '$_POST[exa_nummer]', '$_POST[exa_max_points]', '$_POST[exa_nec_points]', '$_POST[exa_note_key]', '$_POST[exa_sub_id]', '$_POST[exa_sub_name]', '$_POST[exa_date]','$_POST[exa_reg]', '$_POST[exa_comment]')";
    $eintragen = mysqli_query($db, $eintrag);
    if ($eintragen == true) {
        echo "Eintrag war erfolgreich";
    } else {
        echo "Fehler beim Speichern";
    }
}

