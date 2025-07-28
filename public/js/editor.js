(function() {
    // Seleccionamos los elementos del editor de texto y la vista previa
    const toolbar = document.querySelector('.toolbar');
    const editable = document.getElementById('texto-editable');
    const textoVista = document.getElementById('texto-vista-previa');
    const botonVista = document.getElementById('boton-vista-previa');
    const vistaPrevia = document.querySelector('.vista-previa');

    // Variables para el drag and drop
    let isDragging = false;
    let currentX;
    let currentY;
    let initialX;
    let initialY;
    let xOffset = 0;
    let yOffset = 0;

    // Función para inicializar la posición del botón
    function inicializarPosicionBoton() {
        if (botonVista && vistaPrevia) {
            // Centrar el botón tanto horizontal como verticalmente en el contenedor
            xOffset = 0;
            yOffset = 235;
            
            setTranslate(xOffset, yOffset, botonVista);
        }
    }

    // Función para establecer la posición del botón
    function setTranslate(xPos, yPos, el) {
        el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
    }

    // Función para obtener la posición del mouse
    function dragStart(e) {
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

            setTranslate(xOffset, yOffset, botonVista);
        }
    }

    // Función para terminar el arrastre
    function dragEnd() {
        initialX = currentX;
        initialY = currentY;
        isDragging = false;
        botonVista.classList.remove('dragging');
    }

    // Agregar event listeners para drag and drop
    if (botonVista && vistaPrevia) {
        // Mouse events
        botonVista.addEventListener('mousedown', dragStart);
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', dragEnd);
        
        // Touch events para dispositivos móviles
        botonVista.addEventListener('touchstart', dragStart, { passive: false });
        document.addEventListener('touchmove', drag, { passive: false });
        document.addEventListener('touchend', dragEnd);
        
        // Inicializar posición cuando se carga la página
        window.addEventListener('load', inicializarPosicionBoton);
        window.addEventListener('resize', inicializarPosicionBoton);
        
        // También inicializar cuando el DOM esté listo
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', inicializarPosicionBoton);
        } else {
            inicializarPosicionBoton();
        }
    }

    // Esta función copia el texto (y su formato) al área de vista previa
    function actualizarTextoVista() {
        if (textoVista && editable) {
            textoVista.innerHTML = editable.innerHTML;
        }
    }

    // Si existen los elementos del editor de texto
    if (toolbar && editable && textoVista) {
        // Cuando se hace clic en un botón (negrita, cursiva, subrayado)
        toolbar.addEventListener('click', function(e) {
            if (e.target.dataset.cmd) {
                editable.focus(); // Nos aseguramos de que el texto editable esté activo
                document.execCommand(e.target.dataset.cmd, false, null); // Aplicamos el formato
                actualizarTextoVista(); // Mostramos el cambio en la vista previa
            }
        });
        // Cuando se escribe o cambia el texto, lo actualizamos en la vista previa
        editable.addEventListener('input', actualizarTextoVista);
        // También actualizamos cuando se deja de editar
        editable.addEventListener('blur', actualizarTextoVista);
        // Al cargar, mostramos el texto inicial en la vista previa
        actualizarTextoVista();
    }

    // Seleccionamos los controles para cambiar el botón
    const forma = document.getElementById('forma-boton');
    const colorBorde = document.getElementById('color-borde');
    const anchoBorde = document.getElementById('ancho-borde');

    // Esta función cambia la forma y el borde del botón de vista previa
    function actualizarEstiloBoton() {
        if (!botonVista) return;
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

    // Si existen los controles, escuchamos los cambios y actualizamos el botón
    if (forma && colorBorde && anchoBorde && botonVista) {
        forma.addEventListener('change', actualizarEstiloBoton);
        colorBorde.addEventListener('input', actualizarEstiloBoton);
        anchoBorde.addEventListener('input', actualizarEstiloBoton);
        actualizarEstiloBoton(); // Mostramos el estilo inicial
    }
})(); 