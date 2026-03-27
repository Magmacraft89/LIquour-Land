document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-input');
    const radiosCategoria = document.querySelectorAll('input[name="categoria"]');

    if (searchInput) {
        searchInput.addEventListener('input', aplicarFiltros);
    }

    radiosCategoria.forEach(radio => {
        radio.addEventListener('change', aplicarFiltros);
    });
});

function aplicarFiltros() {
    const inputElement = document.getElementById('search-input');
    const textoBusqueda = inputElement ? inputElement.value.toLowerCase().trim() : '';
    
    const radioSeleccionado = document.querySelector('input[name="categoria"]:checked');
    const categoriaSeleccionada = radioSeleccionado ? radioSeleccionado.value : 'Todos';
    
    const productos = document.querySelectorAll('.item-producto');

    productos.forEach(producto => {
        const nombreElement = producto.querySelector('.nombre-producto');
        const codigoElement = producto.querySelector('.codigo-producto');
        
        const nombre = nombreElement ? nombreElement.textContent.toLowerCase() : '';
        const codigo = codigoElement ? codigoElement.textContent.toLowerCase() : '';
        const categoria = producto.getAttribute('data-categoria') || '';

        let coincideTexto = nombre.includes(textoBusqueda) || codigo.includes(textoBusqueda);
        let coincideCategoria = (categoriaSeleccionada === 'Todos') || (categoria === categoriaSeleccionada);

        if (coincideTexto && coincideCategoria) {
            producto.style.display = 'flex';
        } else {
            producto.style.display = 'none';
        }
    });
}