<!DOCTYPE html>
<html>
    <head>
        <title>RDV : Inscription </title>
        <meta charset="utf-8" />
    </head>
    <body>

<?php  date_default_timezone_set('Europe/Paris'); 
        echo date('l jS  F Y h:i:s A');
        echo "<br><br>";
?>
        <h3> Inscrivez-vous ! </h3>
        
      
        <form >
             Nom: <input type="text" name="name"><br><br>
             Prénom: <input type="text" name="prenom"><br><br>
             Numéro de Téléphone: <input type="int" name="numTel"><br><br>
             Adresse: <input type="text" name="adresse"><br><br>   
             Genre: <input type="radio" name="genre" value = "female"> F   
                    <input type="radio" name="genre" value = "male"> H<br><br>          
             E-mail: <input type="text" name="email"><br><br>
             Choisissez un Mot de passe: <br> <input type="text" name="password"><br><br>
            <input type="submit">
        </form>    


    </body>
</html>