<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">*
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>FoodTime | Authentification</title>
</head>
<body>
    <img width="100%" src="banniere.png">
    <?php
        require("navBar.php")
    ?>
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
            <div class="p-3 border bg-light">
                <h3>
                    Déjà membre ? Connectez-vous...
                </h3>
                <form action="authentification.php?methode=connexion" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Identifiant</label>
                        <input type="text" class="form-control" name="login" placeholder="Votre identifiant">
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary">Connexion</button>
                </form>
            </div>
            </div>
            <div class="col">
            <div class="p-3 border bg-light">
                <h3>
                    Nouveau membre ? Inscrivez-vous...
                </h3>
                <form action="authentification.php?methode=inscription" method="post">
                    <div class="mb-3">
                        <label class="form-label">Identifiant</label>
                        <input type="text" class="form-control" name="login">
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control"name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="prenom">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                            <input type="number" class="form-control" name="telephone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Adresse</label>
                            <input type="text" class="form-control" name="adresse">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Code postal</label>
                            <input type="number" class="form-control" name="codePostal">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Ville</label>
                            <input type="text" class="form-control" name="ville">
                        </div>
                        <button type="submit" class="btn btn-primary">Inscription</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
<?php
    session_start();

   if ($_GET["methode"] == "connexion") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $valeurSQL = verificationConnexion($login, $password);
    if ($valeurSQL){
        $_SESSION["login"] = $login;
        header("location: index.php?connexion=valide");
    }
    else {
        echo "Identifiant ou mot de passe invalide !";
    }
   }

   elseif ($_GET["methode"] == "inscription") {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $telephone = $_POST["telephone"];
        $adresse = $_POST["adresse"];
        $codePostal = $_POST["codePostal"];
        $ville = $_POST["ville"];
        inscription($login, $password, $email, $nom, $prenom, $telephone, $adresse, $codePostal, $ville);
        $_SESSION["login"] = $login;
        header("location: index.php");
    }

   elseif ($_GET["methode"] == "deconnexion") {
       session_destroy();
       header("location: index.php?deconnexion=oui");
   }
   else {
       if ($_SESSION["login"]) {
           header("location: index.php");
       }
   }


    function verificationConnexion($login, $password){
        $bdd = new PDO('mysql:host=localhost;dbname=bddrestaurant', 'root', 'root')
                or die('Erreur connexion à la base de données');
        $requete="SELECT * FROM client WHERE login = '$login' AND password = '$password';";
        $resultat = $bdd->query($requete);
        $valeurSQL = $resultat->fetch();
        return $valeurSQL;
    }

    function inscription($login, $password, $email, $nom, $prenom, $telephone, $adresse, $codePostal, $ville){
        $bdd = new PDO('mysql:host=localhost;dbname=bddrestaurant', 'root', 'root')
                or die('Erreur connexion à la base de données');
        $requete="INSERT INTO client (login, password, email, nom, prenom, telephone, adresse, codePostal, ville) VALUES ('$login', '$password', '$email', '$nom', '$prenom', '$telephone', '$adresse', '$codePostal', '$ville');";
        $bdd->query($requete);
    }
    
?>
</html>