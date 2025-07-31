/* 
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
*/

/*  --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa menu .js ----------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- */

/* ------------------------
     -- INICIO CONEXION BD --
     ------------------------ */

        /*vacio*/

/* ------------------------
     -- TERMINO CONEXION BD --
     ------------------------ */

/* ------------------------
     -- titulo variables del php--
     ------------------------ */

const contenidoDiv = document.getElementById('contenido');
const menuBotones = document.querySelectorAll('.menu button');

/* ------------------------
Función para mostrar contenido específico (ya integrado en menu.php)
 ------------------------ */
function mostrarContenido(seccion) {
    // Para la sección de crear nuevo, cargar el contenido de fondo.php
    if (seccion === 'crear_nuevo') {
        fetch('./fondo.php')
            .then(response => response.text())
            .then(html => {
                contenidoDiv.innerHTML = html;
                // Cargar el JS del editor
                const script = document.createElement('script');
                script.src = '../js/fondo.js';
                script.onload = () => {
                    // Opcional: código para inicializar algo extra
                };
                document.body.appendChild(script);
            })
            .catch(() => {
                contenidoDiv.innerHTML = '<p>Error al cargar el contenido.</p>';
            });
    } else {
        // Para las otras secciones, mostrar el contenido ya integrado
        // No necesitamos hacer nada aquí porque el contenido ya está en el HTML
        console.log(`Mostrando sección: ${seccion}`);
    }
}

/* ------------------------
     -- titulo asignar eventos a cada boton--
     ------------------------ */
menuBotones.forEach(boton => {
    boton.addEventListener('click', function() {
        // Quitar clase activo de todos
        menuBotones.forEach(b => b.classList.remove('activo'));
        // Agregar clase activo al botón presionado
        this.classList.add('activo');
        
        // Determinar qué sección mostrar basado en el ID del botón
        const seccion = this.id.replace('btn-', '');
        mostrarContenido(seccion);
    });
});



/*  --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ FIN ITred Spa menu.js --------------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- */

/*
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
*/
