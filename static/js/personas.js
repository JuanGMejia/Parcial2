$(document).ready(function() {
    convertir_valor_a_moneda();
});

function convertir_valor_a_moneda(){
    var salario_valor;
    var salario_moneda;
    $("td.salario").each(function(index, el) {
        salario_valor = Number($(el).text());
        salario_moneda = salario_valor.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        $(el).text(salario_moneda);
    });
}