function createOptionSelect(value){
    const option = document.createElement("option")
    option.value=value
    option.text=value
    return option
}

function addOptions(data, select){
    for (const provincia of data) {
        select.add(createOptionSelect(provincia.nombre),null)
    }
}