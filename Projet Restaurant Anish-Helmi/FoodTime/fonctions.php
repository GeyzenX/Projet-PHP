<?php

    function connexion()

    {

      $hote       = 'localhost';

      $utilisateur= 'root';

      $passe      = 'root';

      $base       = 'bddrestaurant';

      $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);

      mysqli_query($connexion, 'SET NAMES UTF8');

      return $connexion;

    }

 

      function verificationConnexion($login, $password) {

        $baseDeDonnees = new PDO('mysql:host=localhost;dbname=bddrestaurant', 'root', 'root');

        $requete ="SELECT * FROM client WHERE login='$login' AND password = '$password';";

        $resultatSQL = $baseDeDonnees->query($requete);

        $retour = $resultatSQL->fetch();

        return $retour;

      }

?>
    }