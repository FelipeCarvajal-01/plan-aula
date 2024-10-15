// Función para ocultar y mostrar cards, y cerrar el modal específico
function toggleCards(ocultarCardId, mostrarCardId, modalId) {
    // Ocultar la card especificada
    document.getElementById(ocultarCardId).classList.add('d-none');
    
    // Mostrar la card especificada
    document.getElementById(mostrarCardId).classList.remove('d-none');

    // Cerrar el modal especificado
    $('#' + modalId).modal('hide');
}

document.getElementById('confirmSaveCard').addEventListener('click', function() {
    const ocultarCardId = this.getAttribute('data-ocultar');
    const mostrarCardId = this.getAttribute('data-mostrar');
    const modalId = this.getAttribute('data-modal');
    toggleCards(ocultarCardId, mostrarCardId, modalId);
});

document.getElementById('confirmSaveCard2').addEventListener('click', function() {
    const ocultarCardId = this.getAttribute('data-ocultar');
    const mostrarCardId = this.getAttribute('data-mostrar');
    const modalId = this.getAttribute('data-modal');
    toggleCards(ocultarCardId, mostrarCardId, modalId);
});

document.getElementById('confirmSaveCard3').addEventListener('click', function() {
    const ocultarCardId = this.getAttribute('data-ocultar');
    const mostrarCardId = this.getAttribute('data-mostrar');
    const modalId = this.getAttribute('data-modal');
    toggleCards(ocultarCardId, mostrarCardId, modalId);
});