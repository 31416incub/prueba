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
<<<<<<< HEAD
=======
/* ------------------------
     -- titulo rutas de botones --
     ------------------------ */
const rutas = {
    'btn-prediseno': 'prediseno.php',
    'btn-crear_nuevo': 'fondo.php',
    'btn-modificar': 'modificar.php',
    'btn-eliminar': 'eliminar.php'
};
>>>>>>> 73b639b83a3d3676eef4e61fcef27f7a72c91c46

/* ------------------------
     -- titulo variables del php--
     ------------------------ */

const contenidoDiv = document.getElementById('contenido');
const menuBotones = document.querySelectorAll('.menu button');

/* ------------------------
<<<<<<< HEAD
Función para mostrar contenido específico 
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
=======
Función para cargar el contenido PHP por AJAX
 ------------------------ */
function cargarContenido(archivo) {
    fetch(`./${archivo}`)
        .then(response => response.text())
        .then(html => {
            contenidoDiv.innerHTML = html;
            // Si es la vista de crear nuevo, carga el JS del editor
            if (archivo === 'fondo.php') {
                const script = document.createElement('script');
                script.src = '../js/fondo.js';
                script.onload = () => {
                    // Opcional: puedes poner aquí código para inicializar algo extra si lo necesitas
                };
                document.body.appendChild(script);
            }
        })
        .catch(() => {
            contenidoDiv.innerHTML = '<p>Error al cargar el contenido.</p>';
        });
>>>>>>> 73b639b83a3d3676eef4e61fcef27f7a72c91c46
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
<<<<<<< HEAD
        
        // Determinar qué sección mostrar basado en el ID del botón
        const seccion = this.id.replace('btn-', '');
        mostrarContenido(seccion);
    });
});

// Por defecto mostrar la sección de prediseño (ya está visible en el HTML)
// No necesitamos cargar nada por defecto porque el contenido ya está integrado
=======
        // Cargar el archivo PHP correspondiente
        const archivo = rutas[this.id];
        if (archivo) {
            cargarContenido(archivo);
        }
    });
});

// Cargar por defecto la sección de prediseño
cargarContenido(rutas['btn-prediseno']);
>>>>>>> 73b639b83a3d3676eef4e61fcef27f7a72c91c46
