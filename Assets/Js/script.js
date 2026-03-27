document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.getElementById('loginForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const user = document.getElementById('usuario').value;
            const pass = document.getElementById('password').value;

            if (user === "admin" && pass === "admin123") {
                sessionStorage.setItem('usuario', user);
                sessionStorage.setItem('rol', 'admin');
                alert('Bienvenido Administrador');
                window.location.href = "../../../LIquour-Land/Views/Admin/Dasboard.php";
            } 
            else if (user === "empleado" && pass === "emp123") {
                sessionStorage.setItem('usuario', user);
                sessionStorage.setItem('rol', 'empleado');
                alert('Bienvenido Empleado');
                window.location.href = "../../Assets//empleado/Catalogo_Empleado.php";
            } 
            else {
                alert('Usuario o contraseña incorrectos');
            }
        });
    }
});

