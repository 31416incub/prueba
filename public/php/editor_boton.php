<!--
Sitio Web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl o itred.spa@gmail.com
https://www.itred.cl
Creado, Programado y Diseñado por ITred Spa.
BPPJ
-->

<!-- ------------------------------------------------------------------------------------------------------------
     ------------------------------------- INICIO ITred Spa editor_boton .PHP -----------------------------------
     -------------------------------------------------------------------------------------------------------------->

<!-- ------------------------
     -- INICIO CONEXION BD --
     ------------------------ -->

    <?php
        // Establece la conexión a la base de datos de editor_elemento
        $mysqli = new mysqli('localhost', 'root', '', 'editor_elemento_bd');
    ?>

<!-- ---------------------
     -- FIN CONEXION BD --
     --------------------- -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editor_boton</title>
    
    <!-- Llama al archivo CSS --> 
    <link rel="stylesheet" href="../css/editor_boton.css">
</head>
<body>

    <!-- TITULO EDITOR DE COLORES DEL BOTON -->

        <!-- div con clase color-editor para editar colores del boton -->
        <div class="color-editor">
            
            <!-- TITULO SELECTOR COLOR FONDO BOTON -->
            
                <!-- div para cambiar color de fondo -->
                <div>
                    <!-- label para cambiar fondo del boton -->
                    <label for="color-fondo-boton">Fondo botón:</label>
                    <!-- input color para seleccionar color de fondo -->
                    <input type="color" id="color-fondo-boton" value="#ffffff">
                </div>

            <!-- TITULO SELECTOR COLOR BORDE -->
            
                <!-- div para cambiar color del borde -->
                <div>
                    <!-- label para cambiar color del borde -->
                    <label for="color-borde">Color borde:</label>
                    <!-- input color para seleccionar color del borde -->
                    <input type="color" id="color-borde" value="#333333">
                </div>

            <!-- TITULO SELECTOR ANCHO BORDE -->
            
                <!-- div para cambiar ancho del borde -->
                <div>
                    <!-- label para cambiar ancho del borde -->
                    <label for="ancho-borde">Ancho borde:</label>
                    <!-- input number para seleccionar ancho del borde -->
                    <input type="number" id="ancho-borde" min="1" max="10" value="2">
                </div>

            <!-- TITULO SELECTOR FORMA BORDE -->
            
                <!-- div para cambiar forma del borde -->
                <div>
                    <!-- label para cambiar forma del borde -->
                    <label for="forma-boton">Forma borde:</label>
                    <!-- select para elegir forma del boton -->
                    <select id="forma-boton">
                        <!-- opcion rectangulo -->
                        <option value="rect">Rectángulo</option>
                        <!-- opcion redondeado -->
                        <option value="round">Redondeado</option>
                        <!-- opcion ovalado -->
                        <option value="oval">Ovalado</option>
                        <!-- opcion circulo -->
                        <option value="circle">Círculo</option>
                    </select>
                </div>

        </div>

        <!-- TITULO FUNCIONALIDAD JAVASCRIPT INLINE -->
        
            <!-- script para funcionalidad de cambio de estilo de boton -->
            <script>
                // obtener elemento boton vista previa
                const botonVista = document.getElementById('boton-vista-previa');
                // si existe el boton
                if (botonVista) {
                    // evento cambiar color fondo
                    document.getElementById('color-fondo-boton').addEventListener('input', e => {
                        // aplicar color de fondo
                        botonVista.style.background = e.target.value;
                    });
                    // evento cambiar color borde
                    document.getElementById('color-borde').addEventListener('input', e => {
                        // aplicar color de borde
                        botonVista.style.borderColor = e.target.value;
                    });
                    // evento cambiar ancho borde
                    document.getElementById('ancho-borde').addEventListener('input', e => {
                        // aplicar ancho de borde
                        botonVista.style.borderWidth = e.target.value + 'px';
                    });
                    // evento cambiar forma boton
                    document.getElementById('forma-boton').addEventListener('change', e => {
                        // switch segun valor seleccionado
                        switch(e.target.value) {
                            // forma rectangulo
                            case 'rect': botonVista.style.borderRadius = '0'; break;
                            // forma redondeado
                            case 'round': botonVista.style.borderRadius = '12px'; break;
                            // forma oval
                            case 'oval': botonVista.style.borderRadius = '30px/15px'; break;
                            // forma circulo
                            case 'circle': botonVista.style.borderRadius = '50%'; break;
                        }
                    });
                }
            </script>

    <!-- Llama al archivo JS -->
    <script src="../js/editor_color.js"></script>

</body>

</html>

<!-- -------------------------------
     -- INICIO CIERRE CONEXION BD --
     ------------------------------- -->
    <!-- <?php 
        // $mysqli->close();
    ?> -->
<!-- ----------------------------
     -- FIN CIERRE CONEXION BD --
     ---------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------
    -------------------------------------- FIN ITred Spa editor_boton .PHP --------------------------------------
    ------------------------------------------------------------------------------------------------------------- -->

<!--
Sitio Web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl o itred.spa@gmail.com
https://www.itred.cl
Creado, Programado y Diseñado por ITred Spa.
BPPJ
-->