<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados - Liquour Land</title>
    <link rel="stylesheet" href="../../Assets/Css/Style.css">
</head>
<body>
    <?php include '../Layout/header.php'; ?>

    <main class="admin-container">
        <div class="admin-header">
            <h2>Nómina de Empleados</h2>
            <button class="btn-gold">Registrar Empleado</button>
        </div>
        
        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Rol</th>
                    <th>Turno</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>EMP-01</td>
                    <td>Emerson</td>
                    <td>Administrador</td>
                    <td>Completo</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>EMP-02</td>
                    <td>Carlos Martínez</td>
                    <td>Cajero</td>
                    <td>Tarde</td>
                    <td>Activo</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                        <button class="btn-delete">Dar de Baja</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>