<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->

<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ INICIO ITred Spa fondo .php ----------------------------------------------
     ----------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------
     -- INICIO CONEXION BD --
     ------------------------ -->

        <!--vacio-->

<!-- ------------------------
     -- TERMINO CONEXION BD --
     ------------------------ -->

<!-- Vista para crear un nuevo botón editable -->
<div class="parent">
    <!-- ---------------------------------------------------------------
                      titulo Editor de texto 
     -------------------------------------------------- -->
  
    <div class="div1">
        <h2 class="titulo-editor-texto">Editor de texto</h2>
        <div class="editor-texto">
            <div class="toolbar">
                <button type="button" data-cmd="bold"><b>B</b></button>
                <button type="button" data-cmd="italic"><i>I</i></button>
                <button type="button" data-cmd="underline"><u>U</u></button>
            </div>
            <div id="texto-editable" contenteditable="true" class="editable-area"></div>
        </div>
    </div>
     <!-- ---------------------------------------------------------------
                      titulo Editor de boton 
     -------------------------------------------------- -->
    <div class="div2">
        <h2 class="titulo-editor-boton">Editor de botón</h2>
        <div class="editor-boton">
            <button type="button" id="agregar-boton">Agregar botón</button>
            <button type="button" id="eliminar-boton">Eliminar botón</button>
            <label>Forma:
                <select id="forma-boton">
                    <option value="rect">Rectángulo</option>
                    <option value="round">Redondo</option>
                    <option value="oval">Ovalado</option>
                    <option value="circle">Círculo</option>
                </select>
            </label>
            <label>Color de borde:
                <input type="color" id="color-borde" value="#333333">
            </label>
            <label>Ancho de borde:
                <input type="number" id="ancho-borde" min="1" max="10" value="2"> px
            </label>
            <label>Imagen de fondo:
                <input type="file" id="imagen-fondo" accept="image/*">
            </label>
            <label>Color de fondo:
                <input type="color" id="color-fondo-boton" value="#ffffff">
            </label>
            <label>Color de texto:
                <input type="color" id="color-texto-boton" value="#000000">
            </label>
            <label>Fuente:
                <select id="fuente-texto-boton">
                    <option value="Arial">Arial</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Courier New">Courier New</option>
                    <option value="Comic Sans MS">Comic Sans MS</option>
                </select>
            </label>
        </div>
    </div>
     <!-- ---------------------------------------------------------------
                      titulo vista previa
     -------------------------------------------------- -->
    <div class="div3">
        <h2 class="titulo-previa">Vista previa</h2>
        <div class="vista-previa">
            <!-- El botón se agregará dinámicamente aquí -->
        </div>
    </div>
</div>
