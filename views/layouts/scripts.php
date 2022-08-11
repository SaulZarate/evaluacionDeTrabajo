<!-- Jquery -->
<script src="./assets/jquery/jquery.min.js"></script>
<!-- Select2 -->
<script src="./assets/select2/select2.min.js"></script>


<!-- My Javascript -->
<script type="application/javascript">

    /* Data */
    const provinciasJs = <?php echo json_encode($provincias) ?>;
    const localidadesJs = <?php echo json_encode($localidades) ?>;

    $().ready(() => {

        /* Elements */
        const selectProvincia = $('#selectProvincia');
        const selectLocalidades = $('#selectLocalidades');
        // Select2
        selectLocalidades.select2({
            selectionCssClass: 'stylesSelect2'
        });

        selectProvincia.change((e) => {
            clearSelect(selectLocalidades.get(0));

            const provinciaId = e.target.value
            const localidadesByProvincia = localidadesJs.filter(localidad => localidad.idProvincia == provinciaId)

            addOptions(localidadesByProvincia, selectLocalidades.get(0));
        })
    })
</script>