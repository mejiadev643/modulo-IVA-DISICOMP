/* para la tabla dinámica usuarios activos */
$(document).ready(function () {
    $('#Listar').DataTable({
        "language": {
            "sProcessing": "<i class='green-text'>Procesando...</i>",
            "sLengthMenu": "<i class='green-text'>Mostrar</i> _MENU_ <i class='green-text'>Registros</i>",
            "sZeroRecords": "<b><i class='red-text'>No se encontraron resultados</i></b>",
            "sEmptyTable": "<b><i class='red-text'>Ningún dato disponible en esta tabla</i></b>",
            "sInfo": "<i class='green-text'>Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros</i>",
            "sInfoEmpty": "<i class='red-text'>Mostrando registros del 0 al 0 de un total de 0 registros</i>",
            "sInfoFiltered": "<i class='black-text'>(filtrado de un total de _MAX_ registros)</i>",
            "sInfoPostFix": "",
            "sSearch": "<i class='green-text'>BUSCAR:</i>",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                //"sFirst": "<i class='blue-text'>Primero</i>",
                "sFirst": "<i class='blue-text'>Primero</i>",
                "sLast": "<i class='blue-text'>Último</i>",
                "sNext": "<i class='blue-text'>Siguiente</i>",
                "sPrevious": "<i class='blue-text'>Anterior</i>"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
    $("select").val('10');
    $('select').addClass("browser-default");
    //$('select').material_select();
});