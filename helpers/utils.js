function createOptionSelect(id, value){
    const option = document.createElement("option")
    option.value = id
    option.text = primerLetraEnMayuscula(value)
    return option
}

function addOptions(data, select){
    data.forEach(item => {
        select.add(createOptionSelect(item.id, item.nombre), null)
    });
    /* for (const item of data) {
        select.add(createOptionSelect(item.id, item.nombre),null)
    } */
}

function clearSelect(select){
    select.innerHTML = ''
}

function capitalize(word){
    if(!word) return ''
    return word[0].toUpperCase() + word.slice(1);
}

function primerLetraEnMayuscula(text = ''){
    const textToArray = text.trim().split(' ')
    return textToArray.map(word => capitalize(word)).join(' ')
}
