<?php

    require_once '../config/connect.php';

    if($_POST['type'] == "admin")
    {
        $droit = 1;
    }
    else
    {
        $droit = 0;
        $type = $_POST['type'];
    }

    $sql = "INSERT INTO PERSONNEL
            VALUES(:nom, :prenom, :tel, :username, :pass, :droit)";

    $array = array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'tel' => $_POST['tel'],
        'username' => $_POST['username'],
        'pass' => $_POST['password'],
        'droit' => $droit
    );

    print_r($array);

    $req = $conn->prepare($sql);
    $req->execute();

?>