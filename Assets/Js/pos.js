document.addEventListener('DOMContentLoaded', () => {
    // 1. Efecto de sonido (opcional) o feedback visual al tocar items
    const menuItems = document.querySelectorAll('.menu-items li');
    
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            const itemName = item.querySelector('.item').innerText;
            console.log("Agregado: " + itemName);
            
            // Efecto visual rápido de "flash"
            item.style.backgroundColor = "#fff";
            setTimeout(() => {
                item.style.backgroundColor = ""; // Vuelve al CSS original
            }, 100);
        });
    });

    // 2. Manejo de botones numéricos
    const numButtons = document.querySelectorAll('.buttons button');
    numButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Aquí podrías manejar la lógica de la cantidad (QTY)
            console.log("Botón presionado: " + btn.innerText.trim());
        });
    });

    // 3. Ajuste dinámico de altura (Fix para que no salgan barras de scroll raras)
    const adjustHeight = () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    };

    window.addEventListener('resize', adjustHeight);
    adjustHeight();

    const btnKeyboard = document.getElementById('toggle-keyboard');
    const keyboardArea = document.querySelector('.buttons');
    const orderWindow = document.querySelector('.order-window');

   btnKeyboard.addEventListener('click', () => {
        // 1. Alternar visibilidad del teclado
        const isHidden = keyboardArea.classList.toggle('hidden-keyboard');
        
        // 2. Expandir o contraer la tabla
        if (isHidden) {
            orderWindow.style.height = "90vh"; 
        } else {
            orderWindow.style.height = "40vh"; 
        }

        // 3. Feedback visual (Fondo y Letras/Iconos)
        if (isHidden) {
            // Estado SELECCIONADO (Teclado oculto)
            btnKeyboard.style.backgroundColor = "#C5A059"; // Dorado
            btnKeyboard.style.color = "#1A1A1A";           // Texto Negro
            // Si el icono es un <i> dentro del li, esto lo cambiará también:
            btnKeyboard.querySelector('i').style.color = "#1A1A1A"; 
        } else {
            // Estado NORMAL (Teclado visible)
            btnKeyboard.style.backgroundColor = ""; 
            btnKeyboard.style.color = "";           
            btnKeyboard.querySelector('i').style.color = ""; 
        }
    });
});