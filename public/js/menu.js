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
     -- titulo variables del php--
     ------------------------ */

const contenidoDiv = document.getElementById('contenido');
const menuBotones = document.querySelectorAll('.menu button');

/* ------------------------
Función para mostrar contenido específico (ya integrado en menu.php)
 ------------------------ */
function mostrarContenido(seccion) {
    // Para la sección de crear nuevo, cargar el contenido de fondo.php
    if (seccion === 'crear_nuevo') { //if seccion es igual a crear_nuevo
        fetch('./fondo.php') // fetch para cargar el contenido de fondo.php
            .then(response => response.text()) // Convertir la respuesta a texto
            .then(html => { // Mostrar el contenido en el div de contenido
                contenidoDiv.innerHTML = html; // Mostrar el contenido en el div de contenido
                // Cargar el JS del editor
                const script = document.createElement('script'); // Crear un nuevo elemento script
                script.src = '../js/fondo.js'; // Asignar la ruta del script que se va a cargar
                script.onload = () => {
                    // Opcional: código para inicializar algo extra
                };
                document.body.appendChild(script); // Agregar el script al final del body
            })
            .catch(() => { //catch para agregar un mensaje de error si falla la carga
                contenidoDiv.innerHTML = '<p>Error al cargar el contenido.</p>'; // Mostrar un mensaje de error si falla la carga
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
menuBotones.forEach(boton => { // Iterar sobre cada botón del menú
    boton.addEventListener('click', function() { // Asignar un evento de clic a cada botón
        // Quitar clase activo de todos
        menuBotones.forEach(b => b.classList.remove('activo')); // Quitar la clase activo de todos los botones del menú
        // Agregar clase activo al botón presionado
        this.classList.add('activo'); // Agregar la clase activo al botón que se ha presionado
        
        // Determinar qué sección mostrar basado en el ID del botón
        const seccion = this.id.replace('btn-', ''); // Reemplazar 'btn-' con una cadena vacía para obtener el nombre de la sección
        mostrarContenido(seccion); // Llamar a la función para mostrar el contenido de la sección correspondiente
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
