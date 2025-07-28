<!-- Vista para crear un nuevo botón editable -->
<div class="parent">
    <!-- Editor de texto -->
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
    <!-- Editor de botón -->
    <div class="div2">
        <h2 class="titulo-editor-boton">Editor de botón</h2>
        <div class="editor-boton">
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
        </div>
    </div>
    <!-- Vista previa -->
    <div class="div3">
        <h2 class="titulo-previa">Vista previa</h2>
        <div class="vista-previa">
            <button id="boton-vista-previa"><span id="texto-vista-previa"></span></button>
        </div>
    </div>
</div>
<!-- Script que hace funcionar el editor -->
<script src="js/editor.js"></script> 