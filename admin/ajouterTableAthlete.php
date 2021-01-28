<?php 
    $db = mysqli_connect("localhost", "root", "info420", "jeuxAlma");

    if (mysqli_connect_errno())
    {
        echo "Echec lors de la connexion à Mysql : ".mysqli_connect_error();
    }

    $db->set_charset("utf8");

    mysqli_query($db, "drop table athlete");

    $request = "CREATE TABLE athlete 
    (
        idAthlete SMALLINT NOT NULL AUTO_INCREMENT,
        prenomAthlete VARCHAR (25),
        nomAthlete VARCHAR (25),
        courriel varchar (50),
        noSport SMALLINT NOT NULL,
        genre CHAR(1) NOT NULL,
        dateNaissance date,
        noRegion SMALLINT,
        PRIMARY KEY (idAthlete)
    );";
    
    mysqli_query($db, $request);

    $request = "insert into athlete (prenomAthlete, nomAthlete, noSport, genre, dateNaissance, courriel, noRegion) values 
    ('Jean', 'Tremblay', 1, 'M', '2001-01-01','nancy.bluteau@collegealma.ca',8),
    ('Nancy', 'Bluteau', 2, 'F', '2002-02-02','nancy.bluteau@collegealma.ca', 4),
    ('Paul', 'Simard', 3, 'M', '2003-03-03','nancy.bluteau@collegealma.ca', 3),
    ('Marie', 'Potvin', 4, 'F', '2000-10-25','nancy.bluteau@collegealma.ca', 2),
    ('Charles', 'Bouchard', 5, 'M', '2001-10-26','nancy.bluteau@collegealma.ca', 5);";

    mysqli_query($db, $request);
?>