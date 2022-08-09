<?php
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
$message = $save ? "message=ok" : "error=No,se,pudo,guardar,la,información";

header("Location: index.php?".$message);
die();


?>