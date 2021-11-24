<!DOCTYPE html>
<html>
    <head>
        <title>RDV : Accueil </title>
        <meta charset="utf-8" />
    </head>
    <body>

    <?php  date_default_timezone_set('Europe/Paris'); 
        echo date('l jS  F Y h:i:s A');
        echo "<br><br>";
    ?>

        


        <h2>Bienvenus sur le site "Prise de RDV pour Docteurs" !!</h2>
        <br>
        

        <h3> Se connecter : </h3>

        <form action="http://localhost/ProjetRDV/LogIn.php">
         <button type="submit">Connectez-vous </button>
      </form>
            <br><br><br>
            <h3> S'inscrire : </h3>
      <form action = "http://localhost/ProjetRDV/Inscription.php">
          <button type="submit"> Inscrivez-vous </button>
      </form>
        

    </body>
</html>
