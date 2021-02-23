<?php
    session_start();
    include("librairies/fonctions.lib");

    $db;
    connectDB($db);

    if($_POST != null) {
        if(isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_GET['id'])) {
            modifyUserPassword($db, $_GET['id'], $_POST['pass1']);
        } else if(isset($_POST['email']) && isset($_POST['password'])) {
            if(validerConnexion($db, $_POST['email'], $_POST['password'])) {
                $_SESSION['acces'] = true;
                $_SESSION['email'] = $_POST['email'];
                header("LOCATION:index.php");
            } else {
                echo "Courriel et/ou mot de passe incorrect.";
            }
        }
    }

    include("inclus/header.inc");
?>

<!-- Contenu -->
<body>
<div id="home">
    <h2>Connexion</h2>

    <form action="./connexion.php" method="post">
        <div>
            <label for="email">Courriel :</label>
            <input type="email" name="email" id="email"/>
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password"/>
        </div>

        <div>
            <button type="submit" class="btn btn-success">Se connecter</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </form>

    <a href="#" onclick="validateEmail(document.getElementById('email').value)">Mot de passe oublié</a>

</div>
</body>
</html>

<?php
    include("inclus/footer.inc");
?>
