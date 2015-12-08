<html>
    <body>
       <?php
       if($_POST["vor"]=="Dani"){
       echo "Guten Tag, " . $_POST ["vor"] . " " . $_POST["nach"] . "<br>";
       echo "Sie sind: " . $_POST["geschlecht"] . "<br>";
       echo "Ich habe ein: " . $_POST["FZ"];
       }
       else{
           echo "Zugang verweigert";
       }
       ?>
    </body>
</html>


