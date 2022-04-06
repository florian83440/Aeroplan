<?php

    require_once 'config/connect.php';

    // Données des tout les personnels

    $sql = "SELECT  TELEPHONE
            FROM    PERSONNEL
            WHERE   ID = ".$_SESSION['id']."";

    $res = $conn->query($sql);
    $data_user = $res->fetch();

    // Données des commerciaux
    
    $sql = "SELECT  LIBELLE
            FROM    PARLER
            INNER JOIN LANGUE
            ON      PARLER.IDLANGUE = LANGUE.ID
            WHERE   IDPERS = ".$_SESSION['id']."";

    $res = $conn->query($sql);
    $data_user_comm = $res->fetchAll();
    // Nombre de langues
    $nb_langues = $res->rowCount();
    
    // Données des techniques
    
    $sql = "SELECT  NOMBRE_D_HEURES_DE_VOL
            FROM    PERSONNEL_TECHNIQUE
            WHERE   ID = ".$_SESSION['id']."";

    $res = $conn->query($sql);
    $data_user_tech = $res->fetch();

?>