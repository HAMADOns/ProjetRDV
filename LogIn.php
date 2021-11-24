<!DOCTYPE html>
<html>
    <head>
        <title>RDV : Se connecter </title>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php  date_default_timezone_set('Europe/Paris'); 
        echo date('l jS  F Y h:i:s A');
        
        echo "<br><br>";
        
        
    ?>
        <h3>Connectez-vous!!</h3>
        
        <form >          
             E-mail: <input type="text" name="email"><br><br>
             Password: <input type="text" name="password"><br><br>
            <input type="submit">
        </form>    

        

    </body>
</html>
