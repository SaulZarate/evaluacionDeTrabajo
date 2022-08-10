function createOptionSelect(id, value){
    const option = document.createElement("option")
    option.value = value
    option.text = value
    return option
}

function addOptions(data, select){
    for (const item of data) {
        select.add(createOptionSelect(item.id, item.nombre),null)
    }
}

function clearSelect(select){
    select.innerHTML = ''
}

/* 
    Provincia
*/
function findProvinciaById(id, provincias){
    return provincias.find(provincia => provincia.id === id)
}
function findProvinciaIdByName(nombre, provincias){
    return provincias.find(provincia => provincia.nombre == nombre)
}

/* 
    Localidad 
*/
function findLocalidadById(id, localidades){
    return localidades.find(localidad => localidad.id === id)
}

function findLocalidadesByProvinciaId(provinciaId, localidades){
    return localidades.filter( localidad => localidad.provincia_id == provinciaId)
}

