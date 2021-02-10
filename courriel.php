<?php
    //Mail recipient address
    $mail = "keven.imbeault@collegealma.ca";
    $prenom = "Keven";
    $entete = "From:etudiant.info@collegealma.ca\r\n";
    $objet = "test";

    $texte = "test";
    $texte = wordwrap($texte, 70, "\r\n", true);

    if(mail($mail,$objet,$texte,$entete))
    {
        echo "Le courriel s'est bien envoyé";
    } else {
        echo "Le courriel ne s'est pas transmis";
    }
?>
<html>
    <head>
        <title>test courriel</title>
    </head>
    <body>
        <br><br>Courriel
    </body>
</html>
