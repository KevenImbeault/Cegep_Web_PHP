<!--
    Nom : Keven Imbeault
    Date : 9 Février 2021
    But : Créer un panier d'achat en PHP
-->

<!-- Entête de la page -->
<?php
    include("librairies/fonctions.lib");

    $db;
    connectDB($db);

    $panier;

    if(isset($_COOKIE['panier'])) {
        $panier = $_COOKIE['panier'];
    } else {
        $panier = uniqid("idPanier_");
    }

    setcookie("panier", $panier, time()+3*60*60); // set coookie for 3 hours with existing cookie's id

    $idPanier = str_replace("idPanier_", "", $panier);

    include("inclus/header.inc");
?>

<!-- Contenu -->
<body>
<div id="products">
    <h2>Votre commande</h2>
    <hr/>
    <form action="commande.php" method="get">
        <?php
            switch($_GET["action"]) {
                case "ajouter":
                    addItem($db, $idPanier, $_GET["no"]);
                    break;
                case "supprimer":
                    removeItem($db, $idPanier, $_GET["no"]);
                    break;
                case "modifier":
                    break;
                default :
                    displayPanier($db, $idPanier);
                    break;
            }
        ?>
    </form>
</div>
</body>
</html>

<!-- Pied de page -->
<?php
include("inclus/footer.inc");
?>
