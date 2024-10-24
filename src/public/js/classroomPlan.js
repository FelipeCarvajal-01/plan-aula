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

// Función genérica para validar campos vacíos y mostrar alerta o modal
function validate(fields, alertMessage) {
    let hasEmptyField = fields.some(field => document.getElementById(field).value.trim() === "");

    if (hasEmptyField) {
        Swal.fire({
            icon: 'warning',
            title: 'Advertencia',
            text: alertMessage,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Entendido'
        });
    } else {
        // Mostrar el modal si no hay campos vacíos
        $('#modalConfirmation').modal('show');
    }
}

// Escuchar el click en los botones y validar los campos correspondientes
document.getElementById('confirmationEmptyOne').addEventListener('click', function () {
    validate(
        ['textAreaObjective'],
        'El campo objetivo general no puede estar vacío.'
    );

    // Capturar el contenido del textarea
    var contentObjective = document.getElementById('textAreaObjective').value;

    // Imprimir en consola
    console.log(contentObjective)
});

document.getElementById('confirmationEmptyTwo').addEventListener('click', function () {
    validate(
        ['textAreaSpecificOne', 'textAreaSpecificTwo', 'textAreaSpecificThree'],
        'Los campos de objetivos especificos no pueden estar vacíos.'
    );

    // Capturar el contenido del textarea
    var contentSpecificOne = document.getElementById('textAreaSpecificOne').value;
    var contentSpecificTwo = document.getElementById('textAreaSpecificTwo').value;
    var contentSpecificThree = document.getElementById('textAreaSpecificThree').value;

    // Imprimir en consola
    console.log(contentSpecificOne, contentSpecificTwo, contentSpecificThree)
});

document.getElementById('confirmationEmptyThree').addEventListener('click', function () {
    validate(
        ['textAreaThemeOne', 'textAreaThemeTwo', 'textAreaThemeThree', 'textAreaThemeFour', 'textAreaThemeFive'],
        'Los campos de temas no pueden estar vacíos.'
    );

    // Capturar el contenido del textarea
    var contentThemeOne = document.getElementById('textAreaThemeOne').value;
    var contentThemeTwo = document.getElementById('textAreaThemeTwo').value;
    var contentThemeThree = document.getElementById('textAreaThemeThree').value;
    var contentThemeFour = document.getElementById('textAreaThemeFour').value;
    var contenthemeFive= document.getElementById('textAreaThemeFive').value;

    // Imprimir en consola
    console.log(contentThemeOne, contentThemeTwo, contentThemeThree, contentThemeFour, contenthemeFive)
});

document.getElementById('confirmationEmptyFour').addEventListener('click', function () {
    validate(
        ['textAreaThemeSix', 'textAreaThemeSeven', 'textAreaThemeEight', 'textAreaThemeNine', 'textAreaThemeTen'],
        'Los campos de temas no pueden estar vacíos.'
    );

    // Capturar el contenido del textarea
    var contentThemeSix = document.getElementById('textAreaThemeSix').value;
    var contentThemeSeven = document.getElementById('textAreaThemeSeven').value;
    var contentThemeEight = document.getElementById('textAreaThemeEight').value;
    var contentThemeNine = document.getElementById('textAreaThemeNine').value;
    var contenthemeTen= document.getElementById('textAreaThemeTen').value;

    // Imprimir en consola
    console.log(contentThemeSix, contentThemeSeven, contentThemeEight, contentThemeNine, contenthemeTen)
});

document.getElementById('confirmationEmptyFive').addEventListener('click', function () {
    validate(
        ['textAreaThemeEleven', 'textAreaThemeTwelve', 'textAreaThemeThirteen', 'textAreaThemeFourteen', 'textAreaThemeFifteen', 'textAreaThemeSixteen'],
        'Los campos de temas no pueden estar vacíos.'
    );

    // Capturar el contenido del textarea
    var contentThemeEleven = document.getElementById('textAreaThemeEleven').value;
    var contentThemeTwelve = document.getElementById('textAreaThemeTwelve').value;
    var contentThemeThirteen = document.getElementById('textAreaThemeThirteen').value;
    var contentThemeFourteen = document.getElementById('textAreaThemeFourteen').value;
    var contenthemeFifteen = document.getElementById('textAreaThemeFifteen').value;
    var contenthemeSixteen = document.getElementById('textAreaThemeSixteen').value;

    // Imprimir en consola
    console.log(contentThemeEleven, contentThemeTwelve, contentThemeThirteen,contentThemeFourteen, contenthemeFifteen, contenthemeSixteen)
}); 