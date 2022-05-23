/**
 * Previsualiza la imagen cargada en el input antes de guardarla
 * @param {*} input 
 */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // Asignamos el atributo src a la tag de imagen
            $("#imagen").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// El listener va asignado al input
$("#ruta_imagen").change(function () {
    readURL(this);
});
