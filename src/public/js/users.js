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
                            Swal.fire({
                                icon: "success",
                                title: "Advertencia",
                                text: "Se ha creado un nuevo usuario",
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Entendido",
                            });
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

//Capture
$(document).ready(function () {
    // Usar delegación de eventos para capturar los clicks en .detalle-user
    $(document).on("click", ".detalle-user", function () {
        // Capturar el valor del atributo data-user-id
        var userId = $(this).data("user-id");
        console.log("ID del usuario: ", userId);
    });
});
