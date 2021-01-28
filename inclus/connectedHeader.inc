<!--
    Nom : Keven Imbeault
    Date : 7 avril 2020
    But : Créer un fichier contenant uniquement l'entête des pages d'un site afin de rendre la création de pages plus simple
-->

<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Tags nécessaires -->
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

  <!-- CSS de Boostrap -->
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
      integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

  <!-- CSS du site -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Icône du site -->
  <link rel="shortcut icon" href="./images/icon.svg" type="image/x-icon">

  <title>Jeux ALMA</title>
</head>

<body onload="getDateString();">
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <img src="./images/icon.svg" width="30" height="30" alt="">
        <a class="navbar-brand" href="./index.php">Jeux Alma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="./ajouterAthlete.php">Ajouter Athlète</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./modifierAthlete.php">Modifier Athlète</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./supprimerAthlete.php">Supprimer Athlète</a>
            </li>
          </ul>
          <a href="./connexion.php?action=disconnect">Déconnexion</a>
        </div>
      </nav>