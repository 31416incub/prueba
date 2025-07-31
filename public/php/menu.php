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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--configuracion de vista para dispositivos moviles-->
    <title>menu</title>
    
    <!-- Llama al archivo CSS --> 
    <link rel="stylesheet" href="../css/menu.css">
</head> <!--fin del head-->
<body> <!--inicio del body-->

<!-- Contenedor principal del menú de navegación con 4 botones principales -->
<div class="menu"> <!--inicio div principal del menu de navegacion-->
    <!-- Botón para mostrar la sección de Prediseño (activo por defecto) -->
    <button id="btn-prediseno" class="activo">Prediseño</button> <!--boton para mostrar seccion prediseño-->
    
    <!-- Botón para mostrar la sección de Crear nuevo elemento -->
    <button id="btn-crear_nuevo">Crear nuevo</button> <!--boton para mostrar seccion crear nuevo-->
    
    <!-- Botón para mostrar la sección de Modificar elementos existentes -->
    <button id="btn-modificar">Modificar</button> <!--boton para mostrar seccion modificar-->
    
    <!-- Botón para mostrar la sección de Eliminar elementos -->
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
    
    <!-- 
        ========================================================================================
        SUBSECCIÓN: PREDISEÑO
        DESCRIPCIÓN: Contenido y opciones para elementos prediseñados del sistema
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Prediseño -->
    <h2>Vista Prediseñado</h2> <!--titulo principal de la seccion prediseño-->
    
    <!-- Descripción y contenido de la sección Prediseño -->
    <p>Contenido de la opción prediseñado.</p> <!--descripcion del contenido prediseñado-->
    

    <!-- 
        ========================================================================================
        SUBSECCIÓN: MODIFICAR
        DESCRIPCIÓN: Herramientas y opciones para modificar elementos existentes
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Modificar -->
    <h2>Modificar</h2> <!--titulo principal de la seccion modificar-->
    
    <!-- Descripción y contenido de la sección Modificar -->
    <p>Contenido de la opción modificar.</p> <!--descripcion del contenido modificar-->
    
    <!-- 
        ========================================================================================
        SUBSECCIÓN: ELIMINAR
        DESCRIPCIÓN: Herramientas y opciones para eliminar elementos del sistema
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Eliminar -->
    <h2>Eliminar</h2> <!--titulo principal de la seccion eliminar-->
    
    <!-- Descripción y contenido de la sección Eliminar -->
    <p>Contenido de la opción eliminar.</p> <!--descripcion del contenido eliminar-->
    
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

