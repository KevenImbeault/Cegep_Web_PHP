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
  include("inclus/connectedHeader.inc");

  if (isset($_GET['action']))
    if ($_GET['action']== "add")
    {
        createAthlete($db, $_POST);
    }
?>

<!-- Contenu -->
    <div class="container form smallMargin">
        <form  action="ajouterAthlete.php?action=add" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-sm">
              <!-- Date du jour -->
              <b><span id="date"> </span></b>
            </div>
          </div>

          <hr style="background-color:white">

          <div class="row">
            <div class="col-sm">
              <h3>Ajouter un Athlète</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-auto">
              <label for="female">Femme </label>
              <input type="radio" name="gender" id="female" value="F" checked>
            </div>

            <div class="col-sm-auto">
              <label for="male">Homme </label>
              <input type="radio" name="gender" id="male" value="H">
            </div>

            <div class="col-sm-auto">
              <label for="nonBinary">Non-binaire </label>
              <input type="radio" name="gender" id="nonBinary" value="X">
            </div>
          </div>

          <div class="row">
            <label for="firstName" class="col-sm-5">Prénom :</label>
            <div class="col-sm-7">
              <input type="text" name="firstName" id="firstName" class="form-control" maxlength="25">
            </div>
          </div>

          <div class="row">
            <label for="lastName" class="col-sm-5">Nom :</label>
            <div class="col-sm-7">
              <input type="text" name="lastName" id="lastName" class="form-control" maxlength="25">
            </div>
          </div>

          <div class="row">
            <label for="email" class="col-sm-5">Courriel :</label>
            <div class="col-sm-7">
              <input type="email" name="email" id="email" class="form-control" maxlength="25">
            </div>
          </div>

          <div class="row">
            <label for="dateNaissance" class="col-sm-5">Date naissance :</label>
            <div class="col-sm-7">
              <input type="date" name="dateNaissance" id="dateNaissance" class="form-control">
            </div>
          </div>       
          
          <div class="row">
          <label for="sportSelect" class="col-sm-3">Sport : </label>
            <div class="col-sm-9">
              <select name="sportSelect" id="sportSelect" class="form-control">
                <?php
                  createSportOptions($db, "sport");
                ?>
              </select>
            </div>
          </div>

          <div class="row">
          <label for="regionSelect" class="col-sm-3">Région : </label>
            <div class="col-sm-9">
              <select name="regionSelect" id="regionSelect" class="form-control">
                <?php
                  createSportOptions($db, "region");
                ?>
              </select>
            </div>
          </div>

          <div class="row">
            <label for="file" class="col-sm-3">Fichier :</label>
            <div class="col-sm-9">
              <input type="file" name="file" id="file">
            </div>
          </div>   

          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn">Sauvegarder</button>
              <button type="reset" class="btn">Annuler</button>
            </div>
          </div>
        </form>
    </div>

<!-- Pied de page -->
<?php
  include("inclus/footer.inc");
?>