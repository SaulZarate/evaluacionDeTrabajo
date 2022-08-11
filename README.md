# Consigna

- Maquetar con HTML, CSS (opcional Bootstrap) un formulario con 2 campos select. El primero para las provincias y el segundo para las localidades.
- Las opciones para cada uno de los select deben ser tomados desde la base de datos con php y MySQL.
- Muestre los nombres de las provincias y ciudades con la primera letra en mayúscula y el resto en minúsculas. Es decir, si el campo en la base de datos dice "EL NOCHERO", mostrarlo como "El Nochero".
- Asegurese de mostrar los registros ordenados alfabéticamente.
- Al seleccionar provincia, se debe actualizar el campo de localidades con las opciones correspondientes a la provincia seleccionada.
- Agregue un botón que realice un post y guarde en la tabla "opciones_seleccionadas" la combinación seleccionada con la fecha y hora del guardado.
- Muestre una alerta en caso de guardado satisfactorio.
- __Sugerencia: Agregue un buscador al campo de localidades que permita buscar la opción deseada, en vez de tener que seleccionar del listado. Una opción posible es select2.__

## Pre-requisitos 📋
```
- PHP
- Mysql
```

## Instalación 🔧

- Descargar el proyecto 
```
git clone https://github.com/SaulZarate/evaluacionDeTrabajo.git
```
- Importar la base de datos del archivo _/database/database.sql_
- Configurar las credenciales
    - Cambie el nombre del archivo credentials.example.php por credentials.php en la carpeta de _/database/_
    - Ingrese sus credenciales
- Ejecute su proyecto


## Autor ✒️
- Saul Zarate - _Desarrollador_