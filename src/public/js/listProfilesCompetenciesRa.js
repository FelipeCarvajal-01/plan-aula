function selectRow(row) {
    // Remover la clase 'selected' de cualquier otra fila
    const rows = document.querySelectorAll('tr');
    rows.forEach(r => r.classList.remove('selected'));

    // Agregar la clase 'selected' a la fila seleccionada
    row.classList.add('selected');
}
