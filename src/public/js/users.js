$(document).on("click", ".eliminar-user", function () {
    const userId = $(this).data("user-id");
    $("#modalDeleteUser" + userId).modal("show");
});

function buscar() {
    var input = document.getElementById("searchInput");
    var filtro = input.value.toUpperCase(); // Convertir filtro a mayúsculas
    var tablas = document.querySelectorAll(".table-responsive table"); // Obtener todas las tablas dentro de contenedores .table-responsive

    tablas.forEach(function (tabla) {
        var tbody = tabla.getElementsByTagName("tbody")[0];
        var filas = tbody.getElementsByTagName("tr"); // Obtener todas las filas de la tabla
        for (var i = 0; i < filas.length; i++) {
            var datos = filas[i].getElementsByTagName("td");
            var coincide = false;
            for (var j = 0; j < datos.length; j++) {
                var dato = datos[j].innerText.toUpperCase(); // Convertir dato a mayúsculas
                if (dato.includes(filtro)) {
                    coincide = true;
                    break;
                }
            }
            filas[i].style.display = coincide ? "" : "none";
        }
    });
}

//Create
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("addRowButton")
        .addEventListener("click", function () {
            const name = document.getElementById("addName").value;
            const last_name = document.getElementById("addLastName").value;
            const email = document.getElementById("addEmail").value;
            const password = document.getElementById("addPassword").value;
            const phone = document.getElementById("addPhone").value;
            const idRol = document.getElementById("addRole").value;
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            console.log({ name, last_name, email, password, phone, idRol }); //verificacion de valores

            if (name && last_name && phone && email && password && idRol) {
                fetch("/user", {
                    method: "POST",
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    body: JSON.stringify({
                        name: name,
                        last_name: last_name,
                        email: email,
                        password: password,
                        phone: phone,
                        id_rol: idRol,
                    }),
                })
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.success) {
                            alert("El usuario fue creado");
                            location.reload();
                        } else {
                            alert("Error al crear el usuario: " + data.message);
                        }
                    })
                    .catch((error) => {
                        console.error("Error:", error);
                        alert(
                            "Error al procesar la solicitud: " + error.message
                        );
                    });
            } else {
                alert("Por favor complete todos los campos");
            }
        });
});
