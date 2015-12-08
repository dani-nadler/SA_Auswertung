<html>
    <body>
        <p>Bitte tragen Sie Ihren Vornamen
            ,Ihren Nachnamen und Ihre E-Mail Adresse ein.
        </p>
        <form action="eingabe.php" method = "post">
            <p><input name ="vor" /> Vorname</p>
            <p><input name ="nach" /> Nachname</p>
            <p><input name ="mail" /> E-Mail</p>
            <p><input type="password" name ="pw" /> Passwort</p>
            <p><input name ="sorte" /> Sorte (A, B oder C)</p>
            <br>
            <label for="männl">männlich</label>
            <input type="radio" id="männl" name="geschlecht" value="männlich">
            <label for="weibl">weiblich</label>
            <input type="radio" id="weibl" name="geschlecht" value="weiblich">           
            <p><input type="submit"/>
               <input type="reset"/></p>
        </form>
    </body>
</html>