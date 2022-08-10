<?php require_once __DIR__ . "/helpers/utils.php"; ?>
<?php require_once __DIR__ . "/data/Querys.php"; ?>

<?php 
    
    $provincias = Querys::getProvincias();
    $localidades = Querys::getLocalidades();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de conocimientos</title>

    <!-- My styles -->
    <link rel="stylesheet" href="./styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="./helpers/utils.js"></script>
</head>

<body>

    <header class="bg-info border shadow-sm py-2">
        <div class="container">
            <p class="text-center display-5 titleHeader">Evaluacion de conocimientos</p>
        </div>
    </header>

    <?php 
        if(isset($_GET["error"])){
            showAlertError(str_replace(","," ",$_GET["error"]));
        }elseif(isset($_GET["message"])){
            showAlertOk("Su selección ha sido guardada correctamente");
        }
    ?>

    <main class="container my-5">
        <div class="row">
            
            <section class="col-12 col-md-7 sectionText mb-5">
                <form action="validate.php" method="POST" id='form'>
                    <div class="row px-5">
                        <div class="col-12 mb-3">
                            <h1 class="text-center display-5">Seleccione una provincia y una localidad</h1>
                        </div>

                        <div class="col-12">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="selectProvincia">Provincias</label>
                                <select name="provincia" id="selectProvincia" class="form-select" required>
                                    <option value="">-- Seleccione una provincia --</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="selectLocalidades">Localidades</label>
                                <select name="localidad" id="selectLocalidades" class="form-select" required>
                                    <option value="">-- Seleccione una localidad --</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-12 d-grid gap-1">
                            <input type="submit" value="Enviar" class="btn btn-block btn-outline-primary">
                        </div>
                        
                    </div>
                </form>
            </section>

            
            <section class="col-12 col-md-5 contentImg ">
                    <img src="./image/mapaDeArgentinaYSusProvincias.jpg" alt="mapa de Argentina con sus provincias" class="img-thumbnail rounded">
            </section>
        </div>
    </main>

    <footer class="bg-info border-top py-2 fixed-bottom">
        <div class="container">
            <p class="m-0 text-center">Desarrollado por Saúl Zarate</p>
        </div>
    </footer>

    <!-- My Javascript -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            /* 
                Data
            */
            const provincias = <?php echo json_encode($provincias); ?>  
            const localidades = <?php echo json_encode($localidades); ?>  
            
            /* 
                Elements
            */
            const selectProvincia = document.getElementById('selectProvincia')
            const selectLocalidades = document.getElementById('selectLocalidades')
            const form = document.getElementById('form')

            addOptions(provincias, selectProvincia)

            selectProvincia.addEventListener('change', e => {
                clearSelect(selectLocalidades)

                const {id:provinciaId} = findProvinciaIdByName(e.target.value, provincias)

                const localidadesByProvincia = findLocalidadesByProvinciaId(provinciaId, localidades)
                addOptions(localidadesByProvincia, selectLocalidades)
            })

        })
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>