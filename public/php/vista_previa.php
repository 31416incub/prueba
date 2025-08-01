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
     ------------------------------------- INICIO ITred Spa vista_previa .PHP -----------------------------------
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
    <title>ITred Spa - Vista Previa</title> <!--titulo de la pagina-->
    <link rel="stylesheet" href="../css/vista_previa.css"> <!--carga de estilos para vista previa-->
</head>   <!--fin del head-->
<body>    <!--inicio del body-->

<!-- ---------------------
     -- TITULO VISTA PREVIA --
     --------------------- -->

<div class="vista-previa" id="vista-previa"> <!--inicio div clase vista-previa para mostrar preview-->
    <!-- Aquí se mostrará la vista previa del botón o contenido -->
</div> <!--fin div vista-previa-->

<script src="../js/vista_previa.js"></script> <!--carga del script para funcionalidad de vista previa-->

</body>   <!--fin del body-->
</html> <!--fin del html-->
<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred vista_previa.php -----------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->
