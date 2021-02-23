<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=imbk25099802;charset=utf8', 'root', 'info420');
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo "Echec : " . $e -> getMessage();
    }

    $select = $db -> prepare("SELECT * FROM panier WHERE datePanier < DATE_SUB(NOW(), INTERVAL 3 HOUR)");
    $select -> execute();

    $delete = $db -> prepare("DELETE FROM panier WHERE idPanier = ?");

    while($line = $select -> fetch(PDO::FETCH_OBJ)) {
        $delete -> execute([$line -> idPanier]);
    }

?>
