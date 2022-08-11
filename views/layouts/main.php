<main class="container my-5">
    <div class="row">

        <section class="col-12 col-md-7 sectionText mb-5">
            <form action="validate.php" method="POST" id='form'>
                <div class="row px-5">
                    <div class="col-12 mb-3">
                        <h1 class="text-center display-5">Seleccione una provincia y una localidad</h1>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="selectProvincia">Provincias</label>
                            <select name="provincia" id="selectProvincia" class="form-select" required>
                                <option value="">-- Seleccione una provincia --</option>
                                <?php foreach ($provincias as $provincia) : ?>
                                    <option value="<?php echo $provincia["id"] ?>"><?php echo $provincia["nombre"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="input-group">
                            <label class="input-group-text" for="selectLocalidades">Localidades</label>

                            <div class="contentSelect ">
                                <select name="localidad" id="selectLocalidades" required>
                                    <option value="">-- Seleccione una localidad --</option>
                                </select>
                            </div>
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