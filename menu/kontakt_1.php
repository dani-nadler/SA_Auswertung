<html>
    <body>
        <p>Bitte tragen Sie Ihren Vornamen
            ,Ihren Nachnamen und Ihre E-Mail Adresse ein.
        </p>
        <form action="eingabe_1.php" method = "post">
            <p><input name ="vor" /> Vorname</p>
            <p><input name ="nach" /> Nachname</p>

            <label for="männl">männlich</label>
            <input type="radio" id="männl" name="geschlecht" value="männlich">
            <label for="weibl">weiblich</label>
            <input type="radio" id="weibl" name="geschlecht" value="weiblich">
            <br>
            <label for="bike">Bike</label>
            <input type="checkbox" id="bike" name="FZ" value="Bike">
            <label for="Töff">Töff</label>
            <input type="checkbox" id="Töff" name="FZ" value="Töff">
            
            <p><input type="submit"/>
               <input type="reset"/></p>
        </form>
    </body>
</html>