let carrito = [];
let totalVenta = 0;

function agregarAlCarrito(nombre, precio) {
    carrito.push({ nombre, precio });
    totalVenta += precio;
    actualizarVistaTicket();
}

function actualizarVistaTicket() {
    const lista = document.getElementById('lista-carrito');
    const totalElemento = document.getElementById('total-carrito');
    
    if(!lista || !totalElemento) return;

    lista.innerHTML = '';
    
    carrito.forEach((item) => {
        const li = document.createElement('li');
        
        const spanNombre = document.createElement('span');
        spanNombre.textContent = item.nombre;
        
        const spanPrecio = document.createElement('span');
        spanPrecio.textContent = '$' + item.precio.toFixed(2);
        
        li.appendChild(spanNombre);
        li.appendChild(spanPrecio);
        lista.appendChild(li);
    });
    
    totalElemento.textContent = totalVenta.toFixed(2);
}

function cobrar() {
    if (carrito.length === 0) {
        alert('Ey, el carrito está más vacío que mi billetera a fin de mes. ¡Agrega productos!');
        return;
    }
    
    alert('¡Caja registrada! Total cobrado: $' + totalVenta.toFixed(2));
    
    carrito = [];
    totalVenta = 0;
    actualizarVistaTicket();
}

document.addEventListener('DOMContentLoaded', () => {
    const selectReporte = document.getElementById('tipo-reporte');
    const tablas = document.querySelectorAll('.tabla-reporte');
    const tituloImpresion = document.getElementById('titulo-impresion-texto');

    if (selectReporte) {
        selectReporte.addEventListener('change', (e) => {
            tablas.forEach(tabla => {
                tabla.classList.add('tabla-oculta');
            });
            
            const tablaActiva = document.getElementById('tabla-' + e.target.value);
            if(tablaActiva) {
                tablaActiva.classList.remove('tabla-oculta');
            }
            
            if(tituloImpresion) {
                tituloImpresion.textContent = selectReporte.options[selectReporte.selectedIndex].text + ' - Liquour Land';
            }
        });
    }
});

function imprimirReporte() {
    window.print();
}