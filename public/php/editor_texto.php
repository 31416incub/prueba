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
     ------------------------------------- INICIO ITred Spa editor_texto .PHP -----------------------------------
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

<!-- editor_texto.php -->
<!DOCTYPE html> <!--inicio del documento html-->
<html lang="es"> <!--lenguaje español-->
<head> <!--carga de metadatos del documento-->
    <meta charset="UTF-8">    <!--codificacion de caracteres UTF-8-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--configuracion de vista para dispositivos moviles-->
    <title>ITred Spa - Editor de Texto</title> <!--titulo de la pagina-->
    <link rel="stylesheet" href="../css/editor_texto.css"> <!--carga de estilos para editor de texto-->
</head> <!--fin del head-->
<body> <!--inicio del body-->


<!-- ===================== FONDO ===================== -->
<div style="background:#fafafa; padding:10px;"> <!--inicio div con fondo y padding para el editor de texto-->
    <!-- ===================== INGRESAR TEXTO ===================== -->
    <div> <!--inicio div para ingresar texto-->
        <label>Texto:</label> <!--label para el campo de texto-->
        <div id="texto-editable" class="editable-area" contenteditable="true"></div> <!--div editable para escribir texto-->
    </div> <!--fin div ingresar texto-->
    <!-- ===================== NEGRITA, CURSIVA, SUBRAYADO, TACHAR, LISTAS ===================== -->
    <div class="toolbar"> <!--inicio div toolbar con herramientas de formato-->
        <button data-cmd="bold"><b>N</b></button> <!--boton para aplicar negrita-->
        <button data-cmd="italic"><i>K</i></button> <!--boton para aplicar cursiva-->
        <button data-cmd="underline"><u>U</u></button> <!--boton para aplicar subrayado-->
        <button data-cmd="strikeThrough"><s>T</s></button> <!--boton para tachar texto-->
        <button data-cmd="insertOrderedList">OL</button> <!--boton para lista ordenada-->
        <button data-cmd="insertUnorderedList">UL</button> <!--boton para lista desordenada-->
    </div> <!--fin div toolbar-->
</div> <!--fin div con fondo y padding-->
<script src="../js/editor_texto.js"></script> <!--carga del script para funcionalidad del editor de texto-->

</body> <!--fin del body-->
</html> <!--fin del html--> 
<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred editor_texto.php -----------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->
