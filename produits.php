<!--
    Nom : Keven Imbeault
    Date : 6 avril 2020
    But : Créer une page d'acceuil HTML
-->

<!-- Entête de la page -->
<?php 
    include("librairies/fonctions.lib");

    $db;
    connectDB($db);

    include("inclus/header.inc");
?>

<!-- Contenu -->
<div id="products" class="container">
    
    <!-- Date du jour -->
    <b><span class="navbar-text" id="date"> </span></b>

    <h2>Nos produits</h2>

    <!-- Fonction pour afficher les produits dans la base de données -->
    <?php
    displayProduit($db);
    ?>

</div>

<!-- Pied de page -->
<?php 
  include("inclus/footer.inc");
?>
