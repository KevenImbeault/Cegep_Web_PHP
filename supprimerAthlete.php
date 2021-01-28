<!--
    Nom : Keven Imbeault
    Date : 7 avril 2020
    But : Créer une page de connexion en PHP
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
    if ($_GET["action"] == "delete")
      deleteAthlete($db);
  
  include("inclus/connectedHeader.inc");
?>

<!-- Contenu -->
  <div class="container">
    
    <form action="supprimerAthlete.php?action=delete" method="post">
      <!-- Date du jour -->
      <b><span id="date"> </span></b>
      
      <div class="table-responsive">
        
        <?php
          displayTableAhletes($db)           
        ?>
      </div>

      <button type="submit" class="btn submit-delete" onclick="return confirmDelete();">Supprimer</button>
      <button type="reset" class="btn">Annuler</button>
    </form>
  </div>

<!-- Pied de page -->
<?php
  include("inclus/footer.inc");
?>