// Este script se encarga de cambiar el contenido central de la página
// según el botón del menú que se presione, sin recargar la página.

document.addEventListener('DOMContentLoaded', function() {
    // Seleccionamos todos los botones del menú
    const botones = document.querySelectorAll('.menu-btn');
    // Seleccionamos el contenedor donde se mostrará el contenido dinámico
    const contenedor = document.getElementById('contenido-dinamico');

    // Función para cargar y ejecutar un script JS externo
    function cargarScript(src) {
        const script = document.createElement('script');
        script.src = src;
        script.type = 'text/javascript';
        script.defer = true;
        document.body.appendChild(script);
    }

    // Por cada botón del menú, agregamos un evento de click
    botones.forEach(boton => {
        boton.addEventListener('click', function() {
            // Obtenemos el nombre de la vista a cargar
            const vista = boton.getAttribute('data-view');
            // Usamos fetch para pedir el archivo PHP correspondiente
            fetch(`${vista}.php`)
                .then(res => res.text())
                .then(html => {
                    // Mostramos el contenido en el contenedor
                    contenedor.innerHTML = html;
                    // Si la vista es 'crear_nuevo', cargamos el script del editor
                    if (vista === 'crear_nuevo') {
                        cargarScript('js/editor.js');
                    }
                });
        });
    });
}); 