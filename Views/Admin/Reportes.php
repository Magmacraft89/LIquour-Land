<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - Liquour Land</title>
    <link rel="stylesheet" href="../../Assets/Css/Style.css">
</head>
<body>
    <?php include '../Layout/header.php'; ?>

    <main class="admin-container">
        <div class="admin-header">
            <h2>Panel de Reportes</h2>
            <div class="filters">
                <select id="tipo-reporte" class="input-dark">
                    <option value="ventas">Reporte de Ventas</option>
                    <option value="stock">Stock de Productos</option>
                    <option value="proveedores">Productos por Empresa</option>
                </select>
                
                <button class="btn-gold" onclick="imprimirReporte()">Imprimir Reporte</button>
            </div>
        </div>
        
        <div id="zona-impresion">
            <h2 class="titulo-impresion" id="titulo-impresion-texto">Reporte de Ventas - Liquour Land</h2>
            
            <table class="admin-table tabla-reporte" id="tabla-ventas">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>No. Ticket</th>
                        <th>Cajero</th>
                        <th>Método de Pago</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>27-03-2026 14:30</td>
                        <td>TK-9921</td>
                        <td>Carlos Martínez</td>
                        <td>Tarjeta</td>
                        <td>$125.00</td>
                    </tr>
                    <tr>
                        <td>27-03-2026 15:15</td>
                        <td>TK-9922</td>
                        <td>Emerson</td>
                        <td>Efectivo</td>
                        <td>$45.00</td>
                    </tr>
                </tbody>
            </table>

            <table class="admin-table tabla-reporte tabla-oculta" id="tabla-stock">
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>Producto</th>
                        <th>Categoría</th>
                        <th>Stock Actual</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LQ-001</td>
                        <td>Whisky Reserva 12 Años</td>
                        <td>Whisky</td>
                        <td>24</td>
                        <td>Óptimo</td>
                    </tr>
                    <tr>
                        <td>LQ-005</td>
                        <td>Cerveza Artesanal (6 Pack)</td>
                        <td>Cerveza</td>
                        <td>4</td>
                        <td>Stock Bajo</td>
                    </tr>
                </tbody>
            </table>

            <table class="admin-table tabla-reporte tabla-oculta" id="tabla-proveedores">
                <thead>
                    <tr>
                        <th>Empresa / Proveedor</th>
                        <th>Producto Suministrado</th>
                        <th>Última Entrega</th>
                        <th>Cantidad Recibida</th>
                        <th>Costo Lote</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Distribuidora de Licores S.A.</td>
                        <td>Vodka Premium</td>
                        <td>25-03-2026</td>
                        <td>50 Cajas</td>
                        <td>$850.00</td>
                    </tr>
                    <tr>
                        <td>Bodegas del Valle</td>
                        <td>Vino Tinto</td>
                        <td>20-03-2026</td>
                        <td>30 Cajas</td>
                        <td>$420.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="../../Assets/Js/Reportes.js"></script>
</body>
</html>