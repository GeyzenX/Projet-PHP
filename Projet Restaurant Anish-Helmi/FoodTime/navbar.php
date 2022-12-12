<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php"><img src="logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div class="container">
          <h2 margin="ml-3">
            <button type="button" class="btn btn-success" role="button"><a class="text-white" href="index.php">Accueil</button></a>
            <button type="button" class="btn btn-success" role="button"><a class="text-white" href="categorie.php">Catégorie</button></a>
            <?php
              session_start();

              $login = $_SESSION["login"];

              if($_SESSION["login"]) {
                echo "<button type='button' class='btn btn-success' role='button'><a class='text-white' href='reservation.php'>Réservation</button></a>";
                echo "<button type='button' class='btn btn-info' role='button'><a class='text-white'>Vous etes connecté en tant que $login </button></a>";
                echo "<button type='button' class='btn btn-danger' role='button'><a class='text-white' href='authentification.php?methode=deconnexion'>Déconnexion</button></a>";
              }
              else {
                echo "<button type='button' class='btn btn-primary' role='button'><a class='text-white' href='authentification.php'>Connexion / Inscription</button></a>";
              }
            ?>
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>
</nav>