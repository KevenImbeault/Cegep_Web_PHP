<?php
    if(isset($_GET['no']) && isset($_GET['id'])) {
        if($_GET['no'] < time() - 5*60) {
            header("LOCATION:connexion.php");
        }

    }

    include("librairies/fonctions.lib");

    $db;
    connectDB($db);

    include("inclus/header.inc");
?>

<h2>Réinistialisation du mot de passe</h2>

<?php
    printNameByEncryptedId($db, $_GET['id']);
?>

<form action="./connexion.php?id=<?php print($_GET['id'])?>" method="post" onsubmit="return verifyNewPassword()">
    <div>
        <label for="pass1">Inscrire nouveau mot de passe : </label>
        <input type="password" name="pass1" id="pass1">
    </div>

    <div>
        <label for="pass2">Réinscrire nouveau mot de passe : </label>
        <input type="password" name="pass2" id="pass2">
    </div>

    <button type="submit">Valider</button>
</form>

<?php
    include("inclus/footer.inc")
?>
