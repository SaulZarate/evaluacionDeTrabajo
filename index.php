<?php 
    session_start();
    require_once __DIR__ . "/helpers/utils.php"; 
    require_once __DIR__ . "/data/Querys.php"; 

    if(!isset($_SESSION["data"])){
        $_SESSION["data"]["provincias"] = Querys::getProvincias();
        $_SESSION["data"]["localidades"] = Querys::getLocalidades();
    }

    $provincias = $_SESSION["data"]["provincias"];
    $localidades = $_SESSION["data"]["localidades"];
    
    /* App view */
    require_once __DIR__ . "/views/layouts/app.php";
?>
