/**
 * Función que devuelve la fecha actual menos 18 años en formato "yyyy-mm-dd"
 * @returns fecha
 */
 function obtenerFechaActual() {
    var fecha = new Date();
    var dd = fecha.getDate(); // El valor devuelto es un número entero, entre 1 y 31, representa el día del mes para la fecha dada según la hora local.
    var mm = fecha.getMonth() + 1; // Devuelve el mes actual, donde el número 0 indica el primer mes del año según la hora local.
    var yyyy = fecha.getFullYear() - 18; // Devuelve el año de la fecha indicada y le restamos 18 años
  
    if (dd < 10) {
      dd = '0' + dd; //Añadimos un "0" delante del día en el caso donde el valor sea menor de 10
    }
    
    if (mm < 10) {
      mm = '0' + mm; //Añadimos un "0" delante del mes en el caso donde el valor sea menor de 10
    }
  
    fecha = yyyy + "-" + mm + "-" + dd;
    return fecha;
  }
  
  // LLamamos a la función "obtenerFechaActual()" para obtener la fecha actual y la añadimos como valor máximo al formulario
  document.getElementById("fecha-nacimiento").max = obtenerFechaActual();