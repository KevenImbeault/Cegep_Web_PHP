<!--
    Nom : Keven Imbeault
    Date : 28 Janvier 2021
    But : Créer un fichier contenant uniquement l'entête des pages d'un site afin de rendre la création de pages plus simple
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Tags nécessaires -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- CSS de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"/>

    <!-- Police d'écritures -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap" rel="stylesheet" />

    <!-- CSS du site -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Icône du site -->
    <link rel="shortcut icon" href="./images/MagasinCoin.ico" type="image/x-icon">

    <title>Magasin du coin</title>
</head>

<body>
<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Magasin du coin - Gestion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduit" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduit">
                        <li><a class="dropdown-item" href="#">Ajouter</a></li>
                        <li><a class="dropdown-item" href="#">Modifier</a></li>
                        <li><a class="dropdown-item" href="#">Supprimer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCommande" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Commandes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCommande">
                        <li><a class="dropdown-item" href="#">Ajouter</a></li>
                        <li><a class="dropdown-item" href="#">Modifier</a></li>
                        <li><a class="dropdown-item" href="#">Supprimer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFacture" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Factures
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownFacture">
                        <li><a class="dropdown-item" href="#">Ajouter</a></li>
                        <li><a class="dropdown-item" href="#">Modifier</a></li>
                        <li><a class="dropdown-item" href="#">Supprimer</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClient" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clients
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownClient">
                        <li><a class="dropdown-item" href="#">Ajouter</a></li>
                        <li><a class="dropdown-item" href="#">Modifier</a></li>
                        <li><a class="dropdown-item" href="#">Supprimer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>