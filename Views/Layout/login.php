<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Liquour Land</title>
    <link rel="stylesheet" href="../../Assets/Css/login.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h1>LIQUOUR LAND</h1>
            <form action="../Admin/Dasboard.php" method="POST">
                <div class="input-group">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn-login">INGRESAR AL SISTEMA</button>
            </form>
        </div>
    </div>
</body>
</html>