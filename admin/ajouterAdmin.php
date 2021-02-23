<?php
    include("../librairies/fonctions.lib");

    $db;
    connectDB($db);

    if($_POST != null) {
        ajouterUsagerAdmin($db, $_POST['pass'], 'admin', $_POST['email']);
    }
?>

<form action="./ajouterAdmin.php" method="post">
    <label for="email">Courriel : </label>
    <input type="email" name="email" id="email">

    <label for="pass">Mot de passe : </label>
    <input type="password" name="pass" id="pass">

    <button type="submit">Créer utilisateur admin</button>
</form>
