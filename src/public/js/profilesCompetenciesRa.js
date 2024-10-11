// Función para ocultar y mostrar cards, y cerrar el modal específico
function toggleCards(ocultarCardId, mostrarCardId, modalId) {
    // Ocultar la card especificada
    document.getElementById(ocultarCardId).classList.add('d-none');
    
    // Mostrar la card especificada
    document.getElementById(mostrarCardId).classList.remove('d-none');

    // Cerrar el modal especificado
    $('#' + modalId).modal('hide');
}

// Evento del botón que toma los valores desde los atributos data-*
document.getElementById('confirmSave').addEventListener('click', function() {
    // Obtener los valores de los atributos data-ocultar, data-mostrar y data-modal
    const ocultarCardId = this.getAttribute('data-ocultar');
    const mostrarCardId = this.getAttribute('data-mostrar');
    const modalId = this.getAttribute('data-modal');
    
    // Llamar a la función pasando los IDs de las cards y el modal
    toggleCards(ocultarCardId, mostrarCardId, modalId);
});
