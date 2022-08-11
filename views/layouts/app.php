<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de conocimientos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Select2 -->
    <link rel="stylesheet" href="./assets/select2/select2.min.css">

    <!-- My styles -->
    <link rel="stylesheet" href="./styles.css">
    <!-- My Functions JS -->
    <script src="./helpers/utils.js"></script>
</head>

<body>

    <!-- --------- HEADER --------- -->
    <?php require_once __DIR__ . "/header.php"; ?>
    

    <!-- Alert -->
    <?php require_once __DIR__ . "/../includes/alert.php"; ?>
    

    <!-- ---------- MAIN ---------- -->
    <?php require_once __DIR__ . "/main.php"; ?>
    

    <!-- --------- FOOTER --------- -->
    <?php require_once __DIR__ . "/footer.php"; ?>
    
    
    <!-- --------- SCRIPTS --------- -->
    <?php require_once __DIR__ . "/scripts.php"; ?>

</body>

</html>