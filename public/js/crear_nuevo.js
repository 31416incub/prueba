/* 
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
*/

/*  --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa crear_nuevo .js ----------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- */

/* ------------------------
     -- INICIO CONEXION BD --
     ------------------------ */

        /*vacio*/

/* ------------------------
     -- TERMINO CONEXION BD --
     ------------------------ */
(function() {
    // Seleccionamos los elementos del editor de texto y la vista previa
    const toolbar = document.querySelector('.toolbar');
    const editable = document.getElementById('texto-editable');
    const vistaPrevia = document.querySelector('.vista-previa');
    const agregarBoton = document.getElementById('agregar-boton');
    const eliminarBoton = document.getElementById('eliminar-boton');

    // Variables para el drag and drop
    let isDragging = false;
    let currentX;
    let currentY;
    let initialX;
    let initialY;
    let xOffset = 0;
    let yOffset = 0;
    
    let botonVista = null; // Variable para almacenar el botón de vista previa

    // Función para inicializar la posición del botón
    function inicializarPosicionBoton() {
        if (botonVista && vistaPrevia) {
            // Centrar el botón tanto horizontal como verticalmente en el contenedor
            xOffset = 0;
            yOffset = 235;
            
            pos_inicial(xOffset, yOffset, botonVista);
        }
    }

    // Función para establecer la posición del botón
    function pos_inicial(xPos, yPos, el) {
        el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
    }

    // Función para obtener la posición del mouse
    function desplazar_ini(e) {
        if (e.type === "touchstart") {
            initialX = e.touches[0].clientX - xOffset;
            initialY = e.touches[0].clientY - yOffset;
        } else {
            initialX = e.clientX - xOffset;
            initialY = e.clientY - yOffset;
        }

        if (e.target === botonVista) {
            isDragging = true;
            botonVista.classList.add('dragging');
        }
    }

    // Función para arrastrar
    function drag(e) {
        if (isDragging) {
            e.preventDefault();
            
            if (e.type === "touchmove") {
                currentX = e.touches[0].clientX - initialX;
                currentY = e.touches[0].clientY - initialY;
            } else {
                currentX = e.clientX - initialX;
                currentY = e.clientY - initialY;
            }

            xOffset = currentX;
            yOffset = currentY;

            // Calcular límites para que el botón se mantenga completamente dentro del contenedor
            const minX = -400; // Permitir que se extienda la mitad del botón hacia la izquierda
            const maxX = 400;
            const minY = -20;
            const maxY = 462;
            
            // Limitar el movimiento dentro del contenedor completo
            xOffset = Math.max(minX, Math.min(xOffset, maxX));
            yOffset = Math.max(minY, Math.min(yOffset, maxY));

            pos_inicial(xOffset, yOffset, botonVista);
        }
    }

    // Función para terminar el arrastre
    function dragEnd() {
        initialX = currentX;
        initialY = currentY;
        isDragging = false;
        if (botonVista) {
            botonVista.classList.remove('dragging');
        }
    }

    // Función para crear y agregar el botón a la vista previa
    function crearBotonVista() {
        if (botonVista) return; // Solo permitir un botón por ahora
        
        botonVista = document.createElement('button');
        botonVista.id = 'boton-vista-previa';
        const span = document.createElement('span');
        span.id = 'texto-vista-previa';
        span.textContent = editable.textContent || "Botón"; // Texto por defecto
        botonVista.appendChild(span);
        vistaPrevia.appendChild(botonVista);
        
        // Configurar estilos iniciales
        botonVista.style.position = 'absolute';
        botonVista.style.cursor = 'move';
        
        // Inicializar posición y eventos
        inicializarPosicionBoton();
        actualizarEstiloBoton();
        
        // Agregar event listeners para drag and drop
        botonVista.addEventListener('mousedown', desplazar_ini);
        botonVista.addEventListener('touchstart', desplazar_ini, { passive: false });
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('touchmove', drag, { passive: false });
        document.addEventListener('touchend', dragEnd);
    }

    // Función para eliminar el botón de la vista previa
    function eliminarBotonVista() {
        if (botonVista) {
            // Remover event listeners
            botonVista.removeEventListener('mousedown', desplazar_ini);
            botonVista.removeEventListener('touchstart', desplazar_ini);
            document.removeEventListener('mousemove', drag);
            document.removeEventListener('mouseup', dragEnd);
            document.removeEventListener('touchmove', drag);
            document.removeEventListener('touchend', dragEnd);
            
            // Eliminar el botón
            vistaPrevia.removeChild(botonVista);
            botonVista = null;
        }
    }

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
    function actualizarEstiloBoton() {
        if (!botonVista) return;
        
        const forma = document.getElementById('forma-boton');
        const colorBorde = document.getElementById('color-borde');
        const anchoBorde = document.getElementById('ancho-borde');
        
        // Cambiamos la forma del botón
        let borderRadius = '4px';
        if (forma && forma.value === 'round') borderRadius = '20px';
        if (forma && forma.value === 'oval') borderRadius = '50px 20px';
        if (forma && forma.value === 'circle') borderRadius = '50%';
        botonVista.style.borderRadius = borderRadius;
        
        // Cambiamos el color y el ancho del borde
        if (colorBorde) botonVista.style.borderColor = colorBorde.value;
        if (anchoBorde) botonVista.style.borderWidth = anchoBorde.value + 'px';
        botonVista.style.borderStyle = 'solid';
    }

    // Inicialización cuando el DOM esté listo
    (function init() {
        // Eventos para los botones de agregar/eliminar
        if (agregarBoton) {
            agregarBoton.addEventListener('click', crearBotonVista);
        }
        if (eliminarBoton) {
            eliminarBoton.addEventListener('click', eliminarBotonVista);
        }
        
        // Eventos para el editor de texto
        if (toolbar && editable) {
            toolbar.addEventListener('click', function(e) {
                if (e.target.dataset.cmd) {
                    editable.focus();
                    document.execCommand(e.target.dataset.cmd, false, null);
                    actualizarTextoVista();
                }
            });
            
            editable.addEventListener('input', actualizarTextoVista);
            editable.addEventListener('blur', actualizarTextoVista);
        }
        
        // Eventos para los controles de estilo del botón
        const forma = document.getElementById('forma-boton');
        const colorBorde = document.getElementById('color-borde');
        const anchoBorde = document.getElementById('ancho-borde');
        const colorFondo = document.getElementById('color-fondo-boton');
        const colorTexto = document.getElementById('color-texto-boton');
        const fuenteTexto = document.getElementById('fuente-texto-boton');
        
        if (colorFondo) {
            colorFondo.addEventListener('input', function() {
                if (botonVista) {
                    botonVista.style.backgroundColor = colorFondo.value;
                }
            });
        }
        
        if (colorTexto) {
            colorTexto.addEventListener('input', function() {
                if (botonVista) {
                    const span = botonVista.querySelector('#texto-vista-previa');
                    if (span) {
                        span.style.color = colorTexto.value;
                    }
                }
            });
        }

        if (fuenteTexto) {
            fuenteTexto.addEventListener('change', function() {
                if (botonVista) {
                    const span = botonVista.querySelector('#texto-vista-previa');
                    if (span) {
                        span.style.fontFamily = fuenteTexto.value;
                    }
                }
            });
        }
        
        document.getElementById('imagen-fondo').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function(evt) {
                const vistaPrevia = document.querySelector('.vista-previa');
                vistaPrevia.style.backgroundImage = `url('${evt.target.result}')`;
                vistaPrevia.style.backgroundSize = 'cover';
                vistaPrevia.style.backgroundPosition = 'center';
            };
            reader.readAsDataURL(file);
        });
    })();
})();
            reader.readAsDataURL(file);

