(function() {
    // Seleccionamos los elementos del editor de texto y la vista previa
    const toolbar = document.querySelector('.toolbar');
    const editable = document.getElementById('texto-editable');
    const textoVista = document.getElementById('texto-vista-previa');
    const botonVista = document.getElementById('boton-vista-previa');

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