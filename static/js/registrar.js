$(document).ready(function() {
    //
});

function poblar_datos(datos){
    $('#inputNombre').val(datos.nombre);
    $('#inputApellido').val(datos.apellido);
    $('#inputSalario').val(datos.salario);
    $('input[name="inputSexo"][value="' + datos.sexo + '"]').attr('checked', '');
}