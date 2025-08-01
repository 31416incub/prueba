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
     ------------------------------------- INICIO ITred Spa menu .PHP -------------------------------------------
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
<html lang="es"> <!--inicio del html con lenguaje español-->

<head> <!--carga de metadatos del documento-->
    <meta charset="UTF-8"> <!--codificacion de caracteres UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title> <!--titulo de la pagina-->

    <!-- Llama al archivo CSS -->
    <link rel="stylesheet" href="../css/menu.css">
</head> <!--fin del head-->

<!-- ACA SE COMIENZA A PROGRAMAR -->

<body> <!--inicio del body-->

    <!-- Contenedor principal del menú de navegación con 4 botones principales -->
    <div class="menu"> <!--inicio div principal del menu de navegacion-->

        <!-- TITULO BOTON PREDISEÑADO -->

        <button id="btn-prediseno" class="activo">Prediseño</button> <!--boton para mostrar seccion prediseño-->

        <!-- TITULO BOTON CREAR NUEVO -->

        <button id="btn-crear_nuevo">Crear nuevo</button> <!--boton para mostrar seccion crear nuevo-->

        <!-- TITULO BOTON MODIFICAR -->

        <button id="btn-modificar">Modificar</button> <!--boton para mostrar seccion modificar-->

        <!-- TITULO BOTON ELIMINAR -->

        <button id="btn-eliminar">Eliminar</button> <!--boton para mostrar seccion eliminar-->
    </div> <!--fin div principal del menu-->

    <!-- 
    ====================================================================================================
    SECCIÓN: ÁREA DE CONTENIDO DINÁMICO
    DESCRIPCIÓN: Contenedor que muestra el contenido de cada sección según el botón seleccionado
    ====================================================================================================
    -->

    <!-- Contenedor principal donde se muestra el contenido de cada sección seleccionada -->
    <div class="contenido" id="contenido"> <!--inicio div contenedor principal para mostrar contenido dinamico-->
        <!-- El contenido se cargará dinámicamente según el botón seleccionado -->
    </div> <!--fin div contenedor principal de contenido dinamico-->

    <!-- 
    ====================================================================================================
    SECCIÓN: SCRIPTS JAVASCRIPT
    DESCRIPCIÓN: Carga del archivo JavaScript que controla la funcionalidad del menú
    ====================================================================================================
-->

    <!-- Enlace al archivo JavaScript que maneja la interactividad del menú y cambio de contenido -->
    <script src="../js/menu.js"></script> <!--carga del script principal para funcionalidad del menu-->

</body>

</html>
<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred menu.php --------------------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->