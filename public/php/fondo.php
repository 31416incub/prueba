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
<div class="parent"> <!--inicio del div donde se inicia el codigo-->
    <!-- ---------------------------------------------------------------
                      titulo Editor de texto 
     -------------------------------------------------- -->

    <div class="div1"> <!-- Clase div1 donde se podra editar el tipo de texto y para que se vea el texto-->
        <h2 class="titulo-editor-texto">Editor de texto</h2> <!--Texto agrandado -->
        <div class="editor-texto"> <!--Clase editor-texto-->
            <div class="toolbar"> <!-- un toolbar con la clase toolbar -->
                <button type="button" data-cmd="bold"><b>B</b></button> <!--boton para aplicar negrita-->
                <button type="button" data-cmd="italic"><i>I</i></button><!--boton para aplicar cursiva-->
                <button type="button" data-cmd="underline"><u>U</u></button><!--boton para aplicar subrayado-->
            </div><!--fin div del toolbar-->
            <div id="texto-editable" contenteditable="true" class="editable-area"></div><!--inicio y fin del div que edita el texto-->
        </div><!--fin div de clase editor-texto-->
    </div><!--fin div de clase div1-->
    <!-- ---------------------------------------------------------------
                      titulo Editor de boton 
     -------------------------------------------------- -->
    <div class="div2"> <!--Inicia div clase div2 donde es el menu interactivo para editar el boton editable-->
        <h2 class="titulo-editor-boton">Editor de botón</h2> <!--texto agrandado -->
        <div class="editor-boton"> <!--inicio div clase editor-boton donde el boton sera editado-->
            <button type="button" id="agregar-boton">Agregar botón</button> <!-- Añadir el botón editable -->
            <button type="button" id="eliminar-boton">Eliminar botón</button> <!-- Eliminar el botón editable -->
            <!-- Label para darle la forma al boton -->
            <label>Forma: <!--label iniciado para expandir las opciones de la forma del boton-->
                <select id="forma-boton"> <!--id unico forma-boton donde se le da el valor-->
                    <option value="rect">Rectángulo</option><!--opcion para darle forma de rectangulo-->
                    <option value="round">Redondo</option><!--opcion para darle forma redonda-->
                    <option value="oval">Ovalado</option><!--opcion para darle forma ovalada-->
                    <option value="circle">Círculo</option><!--opcion para darle forma de circulo-->
                </select> <!--fin del id forma-boton-->
            </label><!--fin label expandible-->
            <!-- Personalización del boton -->
            <label>Color de borde: <!--label para cambiar el color del borde-->
                <input type="color" id="color-borde" value="#333333"> <!-- Color del borde -->
            </label><!--fin label cambiar color borde-->
            <label>Ancho de borde:<!--label para cambiar el ancho del borde-->
                <input type="number" id="ancho-borde" min="1" max="10" value="2"> px <!-- Ancho del borde en pixeles -->
            </label><!--fin label cambiar ancho-->
            <label>Imagen de fondo:<!--label para cambiar la imagen de fondo-->
                <input type="file" id="imagen-fondo" accept="image/*"> <!-- Imagen de fondo -->
            </label><!--fin label cambiar imagen de fondo-->
            <label>Color de fondo:<!--label para cambiar el color del fondo-->
                <input type="color" id="color-fondo-boton" value="#ffffff"> <!-- Color de fondo -->
            </label><!--fin label cambiar color de fondo-->
            <label>Color de texto:<!--label para cambiar el color del texto-->
                <input type="color" id="color-texto-boton" value="#000000"> <!-- Color del texto -->
            </label><!--fin label cambiar color de texto-->
            <!-- Label con distintas fuentes para el texto del boton -->
            <label>Fuente: <!--inicia un label para darle fuente al texto-->
                <select id="fuente-texto-boton"><!--id fuente-texto-boton para guardar el valor escogido-->
                    <option value="Arial">Arial</option><!--fuente arial-->
                    <option value="Verdana">Verdana</option><!--fuente verdana-->
                    <option value="Tahoma">Tahoma</option><!--fuente tahoma-->
                    <option value="Georgia">Georgia</option><!--fuente georgia-->
                    <option value="Times New Roman">Times New Roman</option><!--fuente times new roman-->
                    <option value="Courier New">Courier New</option><!--fuente courier new-->
                    <option value="Comic Sans MS">Comic Sans MS</option><!--fuente comis sans ms-->
                </select><!--fin de darle valor al id fuente-texto-boton-->
            </label><!--fin label para el id-->
        </div><!--fin div para darle valor al boton editable-->
    </div><!--fin de todo el menu interactivo-->
    <!-- ---------------------------------------------------------------
                      titulo vista previa
     -------------------------------------------------- -->
    <div class="div3"> <!--inicio div clase div3-->
        <h2 class="titulo-previa">Vista previa</h2> <!--texto agrandado-->
        <div class="vista-previa"> <!--div con clase vista-previa que muestra el boton-->
            <!-- El botón se agregará dinámicamente aquí -->
        </div><!--fin div de la vista-previa-->
    </div> <!--fin div clase div3-->
</div> <!--fin del codigo-->


<!-- --------------------------------------------------------------------------------------------------------------------------- 
     ------------------------------------------------ fin ITred fondo.php ------------------------------------------------------
     --------------------------------------------------------------------------------------------------------------------------->

<!--
Sitio web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl
Creado, Programado y Diseñado por Itred Spa.
BPPJ
-->