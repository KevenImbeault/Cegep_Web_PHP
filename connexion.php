<!--
    Nom : Keven Imbeault
    Date : 7 avril 2020
    But : Créer une page de connexion en PHP
-->

<!-- Entête de la page -->
<?php 
	session_start();

  	include("librairies/fonctions.lib");

  	$db;
  	connectDB($db);
  	include("inclus/header.inc");
?>

<!-- Contenu -->
<div class="container form">
	<form method="post" action="connexion.php?action=connexion">
		<div class="row">
			<div class="col-sm">
				<!-- Date du jour -->
				<b><span id="date"> </span></b>
			</div>
		</div>


		<div class="row">
			<!-- Champ - Nom d'utilisateur -->
			<label for="username" class="col-sm-5">Nom d'usager :</label>
			<div class="col-sm-7">
				
				<input type="text" name="username" id="username" class="form-control">
			</div>
		</div>

		<div class="row">
			<!-- Champ - Mot de passe -->
			<label for="password" class="col-sm-5">Mot de passe :</label>
			<div class="col-sm-7">
				<input type="password" name="password" id="password" class="form-control">
			</div>
		</div>

		<!-- Boutons -->
		<div class="row">
			<div class="col-sm-12">
				<button type="submit" class="btn">Se connecter</button>
				<button type="reset" class="btn col-sm-auto">Annuler</button>
			</div>
		</div>
	</form>
	<?php   
	if(isset($_GET["action"])){
		if($_GET["action"] == "connexion"){
			// SI un des champs est vide, affiche un message d'erreur
			if($_POST["username"] == "" || $_POST["password"] == "") {
				print("<p class='errorMsg'>Veuillez remplir les champs avant de soumettre</p>");
			} 

			// Si l'utilisateur à entrer un nom d'utilisateur et un mot de passe, valide si le nom d'utilisateur 
			// et le nom de passe correspond à un compte dans la base de données 
			if($_POST["username"] != "" && $_POST["password"] != "") {
				if(verifyForm($db, $_POST["username"], $_POST["password"])){
					$_SESSION["hasAccess"] = "true";
					header("Location:ajouterAthlete.php");
				} else {
					print("<p class='errorMsg'>Le nom d'usager ou le mot de passe est invalide</p>");
				}
			} 
		}
	}
    ?>
</div>

<!-- Pied de page -->
<?php 
  include("inclus/footer.inc");
?>