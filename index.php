<!--
    Nom : Keven Imbeault
    Date : 6 avril 2020
    But : Créer une page d'acceuil HTML
-->

<!-- Entête de la page -->
<?php 
  include("inclus/header.inc");
?>

<!-- Contenu -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keven Imbeault</title>

    <link rel="stylesheet" href="./css/style.css" />



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav id="homeNav">
    <a href="./about.html">À propos</a>
    <a href="">Compétences</a>
    <a href="">Projets</a>
</nav>
<div id="home">
    <h1>Keven Imbeault</h1>
    <hr />
</div>
</body>
<script src="./fonctions.js"></script>
</html>

<!-- Pied de page -->
<?php 
  include("inclus/footer.inc");
?>
