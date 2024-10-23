document.addEventListener('DOMContentLoaded', function () {
    // Arreglo con los IDs de las cards
    const cards = ['card-1', 'card-2', 'card-3', 'card-4', 'card-5'];

    // Inicialmente mostrar la primera card
    let currentCardIndex = 0;
    document.getElementById(cards[currentCardIndex]).style.display = 'block';

    // Función para mostrar la siguiente card
    function showNextCard() {
        // Ocultar la card actual
        document.getElementById(cards[currentCardIndex]).style.display = 'none';

        // Incrementar el índice para pasar a la siguiente card
        currentCardIndex++;

        if (currentCardIndex < cards.length) {
            // Mostrar la siguiente card
            document.getElementById(cards[currentCardIndex]).style.display = 'block';
        } else {
            // Recargar la página cuando llegues a la última card
            location.reload();
        }
    }

    // Escuchar el click en el botón de confirmación del modal
    document.getElementById('confirm-button').addEventListener('click', function () {
        // Cambiar a la siguiente card
        showNextCard();

        // Cerrar el modal
        $('#modalConfirmation').modal('hide');
    });
});

document.addEventListener("DOMContentLoaded", function () {

    // OBTENER EL SEMESTRE
    var programSelect = document.getElementById("pillSelectProgram"); // OBTIENE EL ELEMENTO HTML CON ID "SEMESTRE"

    var program; // DECLARA UNA VARIABLE PARA ALMACENAR EL SEMESTRE SELECCIONADO

    // AGREGA UN EVENTO "CHANGE" AL ELEMENTO SELECT DEL SEMESTRE
    programSelect.addEventListener("change", function () {
        // OBTIENE EL VALOR DEL SEMESTRE SELECCIONADO
        program = this.options[this.selectedIndex].value;
        console.log('programa: ', program)
    });
    
});