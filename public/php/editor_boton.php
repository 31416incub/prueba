<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->

<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa editor_boton.php ----------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!-- ------------------------
     -- INICIO CONEXION BD --
     ------------------------ -->

<!--vacio-->

<!-- ------------------------
     -- TERMINO CONEXION BD --
     ------------------------ -->


<!-- ===================== FONDO ===================== -->
<div class="color-editor"> <!--inicio div clase color-editor para editar colores del boton-->
    <!-- ===================== FONDO BOTÓN ===================== -->
    <div> <!--inicio div para cambiar color de fondo-->
        <label for="color-fondo-boton">Fondo botón:</label> <!--label para cambiar fondo del boton-->
        <input type="color" id="color-fondo-boton" value="#ffffff"> <!--input color para seleccionar color de fondo-->
    </div> <!--fin div cambiar color de fondo-->
    <!-- ===================== COLOR BORDE ===================== -->
    <div> <!--inicio div para cambiar color del borde-->
        <label for="color-borde">Color borde:</label> <!--label para cambiar color del borde-->
        <input type="color" id="color-borde" value="#333333"> <!--input color para seleccionar color del borde-->
    </div> <!--fin div cambiar color del borde-->
    <!-- ===================== ANCHO BORDE ===================== -->
    <div> <!--inicio div para cambiar ancho del borde-->
        <label for="ancho-borde">Ancho borde:</label> <!--label para cambiar ancho del borde-->
        <input type="number" id="ancho-borde" min="1" max="10" value="2"> <!--input number para seleccionar ancho del borde-->
    </div> <!--fin div cambiar ancho del borde-->
    <!-- ===================== FORMA BORDE ===================== -->
    <div> <!--inicio div para cambiar forma del borde-->
        <label for="forma-boton">Forma borde:</label> <!--label para cambiar forma del borde-->
        <select id="forma-boton"> <!--select para elegir forma del boton-->
            <option value="rect">Rectángulo</option> <!--opcion rectangulo-->
            <option value="round">Redondeado</option> <!--opcion redondeado-->
            <option value="oval">Ovalado</option> <!--opcion ovalado-->
            <option value="circle">Círculo</option> <!--opcion circulo-->
        </select> <!--fin select forma del boton-->
    </div> <!--fin div cambiar forma del borde-->
</div> <!--fin div clase color-editor-->
<script> <!--inicio script funcionalidad-->
    // ===================== FUNCIONALIDAD DE CAMBIO DE ESTILO DE BOTÓN =====================
    const botonVista = document.getElementById('boton-vista-previa'); //obtener elemento boton vista previa
    if (botonVista) { //si existe el boton
        document.getElementById('color-fondo-boton').addEventListener('input', e => { //evento cambiar color fondo
            botonVista.style.background = e.target.value; //aplicar color de fondo
        }); //fin evento color fondo
        document.getElementById('color-borde').addEventListener('input', e => { //evento cambiar color borde
            botonVista.style.borderColor = e.target.value; //aplicar color de borde
        }); //fin evento color borde
        document.getElementById('ancho-borde').addEventListener('input', e => { //evento cambiar ancho borde
            botonVista.style.borderWidth = e.target.value + 'px'; //aplicar ancho de borde
        }); //fin evento ancho borde
        document.getElementById('forma-boton').addEventListener('change', e => { //evento cambiar forma boton
            switch(e.target.value) { //switch segun valor seleccionado
                case 'rect': botonVista.style.borderRadius = '0'; break; //forma rectangulo
                case 'round': botonVista.style.borderRadius = '12px'; break; //forma redondeado
                case 'oval': botonVista.style.borderRadius = '30px/15px'; break; //forma oval
                case 'circle': botonVista.style.borderRadius = '50%'; break; //forma circulo
            } //fin switch
        }); //fin evento forma boton
    } //fin if boton existe
</script> <!--fin script funcionalidad-->

<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred editor_boton.php -----------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->