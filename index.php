<!--
    Nom : Keven Imbeault
    Date : 2 Février 2021
    But : Créer une page d'acceuil en PHP
-->

<!-- Entête de la page -->
<?php
    session_start();
    include("librairies/fonctions.lib");

    $bd;
    connectDB($bd);

    if(isset($_GET['action'])) {
        if($_GET['action'] == 'deconnexion') {
            session_unset();
            session_destroy();
        } else if ($_GET['action'] == 'resetmp' && isset($_GET['email'])){
            sendLostPasswordEmail($bd, $_GET['email']);
        }
    }

    if(isset($_SESSION['acces'])) {
        if($_SESSION['acces'] == true) {
            include('inclus/connectedHeader.inc');
        } else {
            include("inclus/header.inc");
        }
    } else {
        include("inclus/header.inc");
    }


?>

<!-- Contenu -->
<body>
<div id="home">
    <h1>Magasin du coin</h1>
    <hr />
    <p>
        Bienvenue au meilleur magasin du monde !
    </p>
    <p>
        Vous trouverez ici des produits de toutes sortes !
    </p>
    <p>
        Pour plus de renseignements à propos de nos produits,
        vendre votre produit sur le site,
        ou toute autre informations contactez nous via courriel :
        <a href="mailto:info@magasinducoin.com">info@magasinducoin.com</a>
    </p>
</div>
</body>
</html>

<!-- Pied de page -->
<?php 
  include("inclus/footer.inc");
?>
