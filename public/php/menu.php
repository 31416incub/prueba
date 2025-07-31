
<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->

<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa menu.php ------------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------
     -- INICIO CONEXION BD --
     ------------------------ -->

        <!--vacio-->

<!-- ------------------------
     -- TERMINO CONEXION BD --
     ------------------------ -->


<!-- Enlace al archivo CSS que contiene todos los estilos del menú y componentes -->
 <link rel="stylesheet" href="../css/menu.css">

<!-- Contenedor principal del menú de navegación con 4 botones principales -->
<div class="menu">
    <!-- Botón para mostrar la sección de Prediseño (activo por defecto) -->
    <button id="btn-prediseno" class="activo">Prediseño</button>
    
    <!-- Botón para mostrar la sección de Crear nuevo elemento -->
    <button id="btn-crear_nuevo">Crear nuevo</button>
    
    <!-- Botón para mostrar la sección de Modificar elementos existentes -->
    <button id="btn-modificar">Modificar</button>
    
    <!-- Botón para mostrar la sección de Eliminar elementos -->
    <button id="btn-eliminar">Eliminar</button>
</div>

<!-- 
    ====================================================================================================
    SECCIÓN: ÁREA DE CONTENIDO DINÁMICO
    DESCRIPCIÓN: Contenedor que muestra el contenido de cada sección según el botón seleccionado
    ====================================================================================================
-->

<!-- Contenedor principal donde se muestra el contenido de cada sección seleccionada -->
<div class="contenido" id="contenido">
    
    <!-- 
        ========================================================================================
        SUBSECCIÓN: PREDISEÑO
        DESCRIPCIÓN: Contenido y opciones para elementos prediseñados del sistema
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Prediseño -->
    <h2>Vista Prediseñado</h2>
    
    <!-- Descripción y contenido de la sección Prediseño -->
    <p>Contenido de la opción prediseñado.</p>
    

    <!-- 
        ========================================================================================
        SUBSECCIÓN: MODIFICAR
        DESCRIPCIÓN: Herramientas y opciones para modificar elementos existentes
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Modificar -->
    <h2>Modificar</h2>
    
    <!-- Descripción y contenido de la sección Modificar -->
    <p>Contenido de la opción modificar.</p>
    
    <!-- 
        ========================================================================================
        SUBSECCIÓN: ELIMINAR
        DESCRIPCIÓN: Herramientas y opciones para eliminar elementos del sistema
        ========================================================================================
    -->
    
    <!-- Título principal de la sección Eliminar -->
    <h2>Eliminar</h2>
    
    <!-- Descripción y contenido de la sección Eliminar -->
    <p>Contenido de la opción eliminar.</p>
    
</div>


<!-- Enlace al archivo JavaScript que maneja la interactividad del menú y cambio de contenido -->
<script src="../js/menu.js"></script>