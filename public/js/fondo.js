/* 
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
*/

/*  --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa fondo.js -----------------------------------------------
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
(function() {  // Inicia de función que contiene otras funciones y variables
    // Seleccionamos los elementos del editor de texto y la vista previa
    const toolbar = document.querySelector('.toolbar'); // Toolbar para el editor de texto
    const editable = document.getElementById('texto-editable'); // Área editable para el texto
    const vistaPrevia = document.querySelector('.vista-previa'); // Área de vista previa donde se mostrará el botón
    const agregarBoton = document.getElementById('agregar-boton'); // Botón para agregar el botón editable
    const eliminarBoton = document.getElementById('eliminar-boton'); // Botón para eliminar el botón editable
    /* ------------------------
     -- titulo funcion de arrastre--
     ------------------------ */

    // Variables para el drag and drop
    let isDragging = false; // Indica si el botón está siendo arrastrado
    let currentX; // Posición actual del mouse X
    let currentY; // Posición actual del mouse en Y
    let initialX; // Posición inicial del mouse X
    let initialY; // Posición inicial del mouse en Y
    let xOffset = 0; // Desplazamiento X del botón
    let yOffset = 0; // Desplazamiento Y del botón
    
    let botonVista = null; // Variable para almacenar el botón de vista previa

    // Función para inicializar la posición del botón
    function inicializarPosicionBoton() { // funcion que inicializa la posicion del boton
        if (botonVista && vistaPrevia) { // if para verificar si el botonVista y vistaPrevia existen
            // Centrar el botón tanto horizontal como verticalmente en el contenedor
            xOffset = 0; // Posición X inicial
            yOffset = 235; // Posición Y inicial
            
            pos_inicial(xOffset, yOffset, botonVista); // dar la posicion inicial al boton
        }
    }

    // Función para establecer la posición del botón
    function pos_inicial(xPos, yPos, el) { // funcion que establece la posicion del boton
        el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`; // Aplicar la transformación para mover el botón
    }

    // Función para obtener la posición del mouse
    function desplazar_ini(e) { // funcion que obtiene la posicion del mouse
        if (e.type === "touchstart") { // if para verificar si el evento es touchstart
            initialX = e.touches[0].clientX - xOffset; // darle la posicion inicial al mouse en X
            initialY = e.touches[0].clientY - yOffset; // darle la posicion inicial al mouse en Y
        } else { // else para verificar si el evento no es touchstart
            initialX = e.clientX - xOffset; // darle la posicion inicial al mouse en X
            initialY = e.clientY - yOffset; // darle la posicion inicial al mouse en Y
        }

        if (e.target === botonVista) { // if para verificar si el evento es el botonVista
            isDragging = true; // booleano para indicar que se esta arrastrando
            botonVista.classList.add('dragging'); // Agregar clase para indicar que se está arrastrando
        }
    }

    // Función para arrastrar
    function drag(e) { // funcion que arrastra el boton
        if (isDragging) { // if para verificar si se esta arrastrando
            e.preventDefault(); // Prevenir el comportamiento predeterminado del evento
            
            if (e.type === "touchmove") { // if para verificar si el evento es touchmove
                currentX = e.touches[0].clientX - initialX; // Obtener la posición actual del mouse en X
                currentY = e.touches[0].clientY - initialY; // Obtener la posición actual del mouse en Y
            } else { // else para verificar si el evento no es touchmove
                currentX = e.clientX - initialX; // Obtener la posición actual del mouse en X
                currentY = e.clientY - initialY; // Obtener la posición actual del mouse en Y
            }

            xOffset = currentX; // Actualizar el desplazamiento X
            yOffset = currentY; // Actualizar el desplazamiento Y

            // Calcular límites para que el botón se mantenga completamente dentro del contenedor
            const minX = -400; // Permitir que se extienda la mitad del botón hacia la izquierda
            const maxX = 400; // Permitir que se extienda la mitad del botón hacia la derecha
            const minY = -20; // Permitir que se extienda la mitad del botón hacia arriba
            const maxY = 462; // Permitir que se extienda la mitad del botón hacia abajo
            
            // Limitar el movimiento dentro del contenedor completo
            xOffset = Math.max(minX, Math.min(xOffset, maxX)); // Limitar el desplazamiento X
            yOffset = Math.max(minY, Math.min(yOffset, maxY)); // Limitar el desplazamiento Y

            pos_inicial(xOffset, yOffset, botonVista); // Actualizar la posición del botón
        }
    }

    // Función para terminar el arrastre
    function dragEnd() { // funcion que termina el arrastre del boton
        initialX = currentX; // Actualizar la posición inicial del mouse en X
        initialY = currentY; // Actualizar la posición inicial del mouse en Y
        isDragging = false; // Indicar que ya no se está arrastrando
        if (botonVista) { // Verificar si el botón existe
            botonVista.classList.remove('dragging'); // Remover la clase de arrastre
        }
    }
/* ------------------------
     -- titulo agreagar boton--
     ------------------------ */
    // Función para crear y agregar el botón a la vista previa
    function crearBotonVista() { // funcion que crea el boton de vista previa
        if (botonVista) return; // Solo permitir un botón por ahora
        
        botonVista = document.createElement('button'); // Crear un nuevo botón
        botonVista.id = 'boton-vista-previa'; // Asignar un ID al botón
        const span = document.createElement('span'); // Crear un elemento span para el texto del botón
        span.id = 'texto-vista-previa'; // Asignar un ID al span
        span.textContent = editable.textContent || "Botón"; // Texto por defecto
        botonVista.appendChild(span); // Agregar el span al botón
        vistaPrevia.appendChild(botonVista); // Agregar el botón a la vista previa
        
        // Configurar estilos iniciales
        botonVista.style.position = 'absolute'; // Posición absoluta para permitir el arrastre
        botonVista.style.cursor = 'move'; // Cambiar el cursor al arrastrar
        
        // Inicializar posición y eventos
        inicializarPosicionBoton(); // Inicializar la posición del botón
        actualizarEstiloBoton(); // Actualizar el estilo del botón
        
        // Agregar event listeners para drag and drop
        botonVista.addEventListener('mousedown', desplazar_ini); // listener que vigila el evento mousedown
        botonVista.addEventListener('touchstart', desplazar_ini, { passive: false });  //listener que vigila el evento touchstart
        document.addEventListener('mousemove', drag); // listener que vigila el evento mousemove
        document.addEventListener('mouseup', dragEnd); // listener que vigila el evento mouseup
        document.addEventListener('touchmove', drag, { passive: false }); // listener que vigila el evento touchmove
        document.addEventListener('touchend', dragEnd); // listener que vigila el evento touchend
    }
/* ------------------------
     -- titulo eliminar boton--
     ------------------------ */
    // Función para eliminar el botón de la vista previa
    function eliminarBotonVista() { // funcion que elimina el boton de vista previa
        if (botonVista) { // if para verificar si el botonVista existe
            // Remover event listeners
            botonVista.removeEventListener('mousedown', desplazar_ini); // eliminar listener del evento mousedown
            botonVista.removeEventListener('touchstart', desplazar_ini); // eliminar listener del evento touchstart
            document.removeEventListener('mousemove', drag); // eliminar listener del evento mousemove
            document.removeEventListener('mouseup', dragEnd); // eliminar listener del evento mouseup
            document.removeEventListener('touchmove', drag); // eliminar listener del evento touchmove
            document.removeEventListener('touchend', dragEnd); // eliminar listener del evento touchend
            
            // Eliminar el botón
            vistaPrevia.removeChild(botonVista); // Remover el botón de la vista previa
            botonVista = null; //borrar la referencia al botón
        }
    }
/* ------------------------
     -- titulo editar boton--
     ------------------------ */
    // Esta función copia el texto (y su formato) al área de vista previa
    function actualizarTextoVista() {
        if (botonVista && editable) {
            const span = botonVista.querySelector('#texto-vista-previa');
            if (span) {
                span.innerHTML = editable.innerHTML;
            }
        }
    }

    // Esta función cambia la forma y el borde del botón de vista previa
    function actualizarEstiloBoton() { // funcion que actualiza el estilo del boton de vista previa
        if (!botonVista) return; //if para verificar si el botonVista existe
        
        const forma = document.getElementById('forma-boton'); //const para obtener el elemento forma-boton
        const colorBorde = document.getElementById('color-borde'); //const para obtener el elemento color-borde
        const anchoBorde = document.getElementById('ancho-borde'); //const para obtener el elemento ancho-borde
        
        // Cambiamos la forma del botón
        let borderRadius = '4px'; //dejar el borde por defecto
        if (forma && forma.value === 'round') borderRadius = '20px'; // un if para verificar si la forma es round
        if (forma && forma.value === 'oval') borderRadius = '50px 20px'; // un if para verificar si la forma es oval
        if (forma && forma.value === 'circle') borderRadius = '50%'; // un if para verificar si la forma es circle
        botonVista.style.borderRadius = borderRadius; // Asignar el borderRadius al botón de vista previa
        
        // Cambiamos el color y el ancho del borde
        if (colorBorde) botonVista.style.borderColor = colorBorde.value; // Asignar el color del borde
        if (anchoBorde) botonVista.style.borderWidth = anchoBorde.value + 'px'; // Asignar el ancho del borde
        botonVista.style.borderStyle = 'solid'; // Aseguramos que el borde sea sólido
    }
/* ------------------------
     --  eventos de botones--
     ------------------------ */
    // Inicialización cuando el DOM esté listo
    (function init() { // funcion que inicializa el codigo
        // Eventos para los botones de agregar/eliminar
        if (agregarBoton) { //if para verificar si el agregarBoton existe
            agregarBoton.addEventListener('click', crearBotonVista); // listener que vigila el evento click del boton agregar
        }
        if (eliminarBoton) { //if para verificar si el eliminarBoton existe
            eliminarBoton.addEventListener('click', eliminarBotonVista); // listener que vigila el evento click del boton eliminar
        }
        
        // Eventos para el editor de texto
        if (toolbar && editable) { //if para verificar si el toolbar y editable existen
            toolbar.addEventListener('click', function(e) { // listener que vigila el evento click del toolbar
                if (e.target.dataset.cmd) { // Verificar si el botón tiene un comando asociado
                    editable.focus(); // Enfocar el área editable
                    document.execCommand(e.target.dataset.cmd, false, null); // Ejecutar el comando asociado al botón
                    actualizarTextoVista(); // Actualizar el texto de vista previa
                }
            });
            
            editable.addEventListener('input', actualizarTextoVista); // listener que vigila el evento input del editable
            editable.addEventListener('blur', actualizarTextoVista); // listener que vigila el evento blur del editable
        }
        
        // Eventos para los controles de estilo del botón
        const forma = document.getElementById('forma-boton'); //const para obtener el elemento forma-boton
        const colorBorde = document.getElementById('color-borde'); //const para obtener el elemento color-borde
        const anchoBorde = document.getElementById('ancho-borde'); //const para obtener el elemento ancho-borde
        const colorFondo = document.getElementById('color-fondo-boton'); //const para obtener el elemento color-fondo-boton
        const colorTexto = document.getElementById('color-texto-boton'); //const para obtener el elemento color-texto-boton
        const fuenteTexto = document.getElementById('fuente-texto-boton'); //const para obtener el elemento fuente-texto-boton
        
        if (colorFondo) { //if para verificar si el colorFondo existe
            colorFondo.addEventListener('input', function() { // listener que vigila el evento input del colorFondo
                if (botonVista) { //if para verificar si el botonVista existe
                    botonVista.style.backgroundColor = colorFondo.value; // Asignar el color de fondo al botón de vista previa
                }
            });
        }
        
        if (colorTexto) { //if para verificar si el colorTexto existe
            colorTexto.addEventListener('input', function() { // listener que vigila el evento input del colorTexto
                if (botonVista) { //if para verificar si el botonVista existe
                    const span = botonVista.querySelector('#texto-vista-previa'); //const para obtener el span del botonVista
                    if (span) { //if para verificar si el span existe
                        span.style.color = colorTexto.value; // Asignar el color del texto al span del botón de vista previa
                    }
                }
            });
        }

        if (fuenteTexto) { //if para verificar si el fuenteTexto existe
            fuenteTexto.addEventListener('change', function() { // listener que vigila el evento change del fuenteTexto
                if (botonVista) { //if para verificar si el botonVista existe
                    const span = botonVista.querySelector('#texto-vista-previa'); //const para obtener el span del botonVista
                    if (span) { //if para verificar si el span existe
                        span.style.fontFamily = fuenteTexto.value; // Asignar la fuente del texto al span del botón de vista previa
                    }
                }
            });
        }
        
        document.getElementById('imagen-fondo').addEventListener('change', function(e) { // listener que vigila el evento change del input de imagen
            const file = e.target.files[0]; // Obtener el primer archivo seleccionado
            if (!file) return; // Si no hay archivo, salir
            const reader = new FileReader(); //const para crear un nuevo FileReader
            reader.onload = function(evt) { //reader.onload para manejar la carga del archivo
                const vistaPrevia = document.querySelector('.vista-previa'); //const para obtener el elemento vista previa
                vistaPrevia.style.backgroundImage = `url('${evt.target.result}')`; // Asignar la imagen de fondo a la vista previa
                vistaPrevia.style.backgroundSize = 'cover'; // Ajustar el tamaño de la imagen de fondo
                vistaPrevia.style.backgroundPosition = 'center'; // Centrar la imagen de fondo
            };
            reader.readAsDataURL(file); // Leer el archivo como una URL de datos
        });
    })();
})();
            reader.readAsDataURL(file); // Leer el archivo como una URL de datos al finalizar la carga

/*  --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ FIN ITred Spa fondo.js -------------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- */

/*
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
*/

