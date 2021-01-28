<!--
    Nom : Keven Imbeault
    Date : 6 avril 2020
    But : Créer une page d'acceuil HTML
-->

<!-- Entête de la page -->
<?php 
  session_start();
  if ($_SESSION['hasAccess'] != "true")
	{
		header("Location:connexion.php");
  }
  
  include("librairies/fonctions.lib");

  $db;
  connectDB($db);

  if (isset($_GET["action"]))
    if ($_GET["action"] == "modify")
      modifyAthlete($db, $_GET["no"]);

  include("inclus/connectedHeader.inc");
?>

<!-- Contenu -->
<div class="container">
    
  <!-- Date du jour -->
  <b><span class="navbar-text" id="date"> </span></b>
  
  <h2>Nos Athlètes</h2>

  <!-- Fonction pour afficher les athlètes dans la base de données -->
  <?php
    displayAthleteMod($db);
  ?>
</div>

<!-- Pied de page -->
<?php 
  include("inclus/footer.inc");
?>
