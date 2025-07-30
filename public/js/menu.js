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
     -- titulo rutas de botones --
     ------------------------ */
const rutas = {
    'btn-prediseno': 'prediseno.php',
    'btn-crear_nuevo': 'fondo.php',
    'btn-modificar': 'modificar.php',
    'btn-eliminar': 'eliminar.php'
};

/* ------------------------
     -- titulo variables del php--
     ------------------------ */

const contenidoDiv = document.getElementById('contenido');
const menuBotones = document.querySelectorAll('.menu button');

/* ------------------------
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
        // Cargar el archivo PHP correspondiente
        const archivo = rutas[this.id];
        if (archivo) {
            cargarContenido(archivo);
        }
    });
});

// Cargar por defecto la sección de prediseño
cargarContenido(rutas['btn-prediseno']);