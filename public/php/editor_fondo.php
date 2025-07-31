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
     ------------------------------------- INICIO ITred Spa editor_fondo .PHP -----------------------------------
     ------------------------------------------------------------------------------------------------------------ -->

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

<!DOCTYPE html> <!--inicio del documento html-->
<html lang="es"> <!--lenguaje español-->
<head> <!--carga de metadatos del documento-->
    <meta charset="UTF-8"> <!--codificacion de caracteres UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--configuracion de la vista-->
    <title>ITred Spa - Editor de Fondo</title> <!--titulo de la pagina-->
    <link rel="stylesheet" href="../css/editor_fondo.css"> <!--carga de estilos para editor de fondo-->
</head> <!--fin del head-->
<body> <!--inicio del body-->


<!-- ===================== FONDO ===================== -->
<div class="fondo-editor"> <!--inicio div clase fondo-editor para editar fondo-->
    <!-- ===================== COLOR FONDO ===================== -->
    <div> <!--inicio div para cambiar color de fondo-->
        <label for="color-fondo-editor">Color de fondo:</label> <!--label para cambiar color de fondo del editor-->
        <input type="color" id="color-fondo-editor" value="#fafafa"> <!--input color para seleccionar color de fondo-->
    </div> <!--fin div cambiar color de fondo-->
    <!-- ===================== AGREGAR IMAGEN ===================== -->
    <div> <!--inicio div para agregar imagen de fondo-->
        <label for="imagen-fondo-editor">Agregar imagen:</label> <!--label para agregar imagen de fondo-->
        <input type="file" id="imagen-fondo-editor" accept="image/*"> <!--input file para seleccionar imagen de fondo-->
    </div> <!--fin div agregar imagen de fondo-->
</div> <!--fin div clase fondo-editor-->

<script src="../js/editor_fondo.js"></script> <!--carga del script para funcionalidad del editor de fondo-->

</body> <!--fin del body-->
</html> <!--fin del html-->
<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred editor_fondo.php -----------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->
