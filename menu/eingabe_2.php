<html>
    <body>
       <?php
       include_once 'db/connection.php';
       if($_POST["pw"]=="1234" && $_POST["vor"]=="Dani"){
       echo "Guten Tag, " . $_POST ["vor"] . " " . $_POST["nach"] . ". ";
       echo "Wir senden Ihnen eine E-Mail an: " . $_POST["mail"] . "<br>";
       echo "Sie sind: " . $_POST["geschlecht"];
       switch ($_POST["sorte"]){
           case "A";
               echo "Sie haben A ausgewählt";
               break;
           case "B";
               echo "Sie haben B ausgewählt";
               break;
           case "C";
               echo "Sie haben C ausgewählt";
               break;
           default:
               echo "Als Sorte nur A, B, oder C auswählen";
       }
       }
       else{
           echo "Zugang verweigert";
       }
       ?>
    </body>
</html>


