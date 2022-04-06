<?php

    session_start(); 

    $event = $_REQUEST['event'];

    require_once '../config/connect.php';

    switch ($event)
    {
        case 'login':

            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            $sql = "SELECT  MOTDEPASSE
                    FROM    PERSONNEL
                    WHERE   NOMUTILISATEUR = '".$username."'";
                
            $res = $conn->query($sql);
            $ligne = $res->fetch();


            if(password_verify($password, $ligne['MOTDEPASSE']))
            {   
                // On récupère l'id
                $sql = "SELECT  ID,
                                PRENOM,
                                NOM,
                                ADMIN
                        FROM    PERSONNEL
                        WHERE   NOMUTILISATEUR = '".$username."'";
                    
                $res = $conn->query($sql);
                $infos = $res->fetch();

                $_SESSION['id'] = $infos['ID'];
                $_SESSION['nom'] = $infos['NOM'];
                $_SESSION['prenom'] = $infos['PRENOM'];
                
                if($infos['ADMIN'] == 1)
                {
                    $_SESSION['admin'] = true;
                }

                header('location: ../index.php');
            }
            else
            {
                header('location: ../index.php?event=wrong_login');
            }

        break;

        case 'logout':

            session_destroy();
            header('location: ../index.php');

        break;
    }
