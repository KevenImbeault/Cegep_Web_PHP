<!--
    Nom : Keven Imbeault
    Date : 7 avril 2020
    But : Créer une page contenant un formulaire pour rejoindre une organisation en PHP
-->

<!-- Entête de la page -->
<?php 
  include("librairies/fonctions.lib");

  $db;
  connectDB($db);
  
  if(isset($_GET["action"])) {
    if($_GET["action"] == "send") {
      $sent = (bool) sendEmail($db, $_GET["prenom"], $_GET["nom"], $_GET["sport"]);
      if($sent) 
        header("Location:produits.php");
    }
  }
  include("inclus/header.inc");
?>

<!-- Contenu -->
    <div class="container form">
        <form method="post" <?php echo "action='rejoindre.php?action=send&nom=$_GET[nom]&prenom=$_GET[prenom]&sport=$_GET[sport]'"; ?>>
          <div class="row">
            <div class="col-sm">
              <!-- Date du jour -->
              <b><span id="date"> </span></b>
            </div>
          </div>

          <div class="row">
            <!-- Champ - Nom de l'athlète -->
            <label for="athleteName" class="col-sm-5">Athlète :</label>
            <div class="col-sm-7">
              <input type="text" name="athleteName" id="athleteName" class="form-control" <?php echo "value='$_GET[prenom] $_GET[nom]'"; ?> disabled>
            </div>
          </div>

          <div class="row">
            <!-- Champ - Sport de l'athlète -->
            <label for="athleteSport" class="col-sm-5">Sport :</label>
            <div class="col-sm-7">
              <input type="text" name="athleteSport" id="athleteSport" class="form-control" <?php echo "value='$_GET[sport]'"; ?> disabled>
            </div>
          </div>
          
          <div class="row">
            <div class="col-sm-12">
              <!-- Zone de texte pour messages -->
              <textarea name="message" id="message" class="form-control" rows="15" placeholder="Inscrire votre message"></textarea>
            </div>
          </div>

          <!-- Boutons -->
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn">Envoyer</button>
              <button type="reset" class="btn">Annuler</button>
            </div>
          </div>
        </form>
    </div>

<!-- Pied de page -->
<?php
    if(isset($_GET["action"]))
        if($_GET["action"] == "send")
            if(!$sent) print("<script>alert('Le message n\'a pas pus être envoyer !');</script>");

    include("inclus/footer.inc");
?>