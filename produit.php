<!--
    Nom : Keven Imbeault
    Date : 2 Février 2021
    But : Créer une page contenant les produits du magasin
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
