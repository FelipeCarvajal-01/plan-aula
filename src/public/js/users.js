
$(document).on('click', '.eliminar-user', function () {
    const userId = $(this).data('user-id');
    $('#modalDeleteUser' + userId).modal('show');
});


function buscar() {
    var input = document.getElementById('searchInput');
    var filtro = input.value.toUpperCase(); // Convertir filtro a mayúsculas
    var tablas = document.querySelectorAll('.table-responsive table'); // Obtener todas las tablas dentro de contenedores .table-responsive

    tablas.forEach(function(tabla) {
        var tbody = tabla.getElementsByTagName('tbody')[0];
        var filas = tbody.getElementsByTagName('tr'); // Obtener todas las filas de la tabla
        for (var i = 0; i < filas.length; i++) {
            var datos = filas[i].getElementsByTagName('td');
            var coincide = false;
            for (var j = 0; j < datos.length; j++) {
                var dato = datos[j].innerText.toUpperCase(); // Convertir dato a mayúsculas
                if (dato.includes(filtro)) {
                    coincide = true;
                    break;
                }
            }
            filas[i].style.display = coincide ? '' : 'none';
        }
    });
}
