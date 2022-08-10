<?php
session_start();
require_once __DIR__ . "/helpers/utils.php";
require_once __DIR__ . "/data/Historial.php";

$provinciaGET = $_POST["provincia"] ?? null;
$localidadGET = $_POST["localidad"] ?? null;

/* Validar datos */
if(!$provinciaGET || !$localidadGET){
    header("Location: index.php?error=Datos,incompletos");
    die();
}

$historial = new Historial($provinciaGET, $localidadGET);
$save = $historial->save();

if($save){
    $_SESSION["message"]["type"] = "ok";
    $_SESSION["message"]["text"] = "Su elección ha sido guardada correctamente";
}else{
    $_SESSION["message"]["type"] = "error";
    $_SESSION["message"]["text"] = "No se pudo guardar la información";
}

//header('Location: ./index.php');
echo "<script>window.location='index.php'</script>;";
exit();


?>