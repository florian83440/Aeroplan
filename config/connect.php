<?php

    try
    {
        $conn = new PDO("sqlsrv:Server=localhost;Database=Aeroplan; Encrypt=true; TrustServerCertificate=true;", "anonyme", "anonyme", );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch(PDOException $e)
    {
        echo "Erreur : " . $e->getMessage();
    }

?>