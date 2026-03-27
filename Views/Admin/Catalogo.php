<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Liquour Land</title>
    <link rel="stylesheet" href="../../Assets/Css/Style.css">
</head>
<body>
    <?php include '../Layout/header.php'; ?>

    <main class="admin-container">
        <div class="admin-header">
            <h2>Gestión de Catálogo</h2>
            <button class="btn-gold">Añadir Nuevo Licor</button>
        </div>
        
        <table class="admin-table">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Nombre del Producto</th>
                    <th>Categoría</th>
                    <th>Precio Venta</th>
                    <th>Stock Actual</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>LQ-001</td>
                    <td>Whisky Reserva 12 Años</td>
                    <td>Whisky</td>
                    <td>$45.00</td>
                    <td>24</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                        <button class="btn-delete">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>LQ-002</td>
                    <td>Tequila Añejo Cristalino</td>
                    <td>Tequila</td>
                    <td>$35.50</td>
                    <td>15</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                        <button class="btn-delete">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>