
<!-- ===================== FONDO ===================== -->
<div class="color-editor">
    <!-- ===================== FONDO BOTÓN ===================== -->
    <div>
        <label for="color-fondo-boton">Fondo botón:</label>
        <input type="color" id="color-fondo-boton" value="#ffffff">
    </div>
    <!-- ===================== COLOR BORDE ===================== -->
    <div>
        <label for="color-borde">Color borde:</label>
        <input type="color" id="color-borde" value="#333333">
    </div>
    <!-- ===================== ANCHO BORDE ===================== -->
    <div>
        <label for="ancho-borde">Ancho borde:</label>
        <input type="number" id="ancho-borde" min="1" max="10" value="2">
    </div>
    <!-- ===================== FORMA BORDE ===================== -->
    <div>
        <label for="forma-boton">Forma borde:</label>
        <select id="forma-boton">
            <option value="rect">Rectángulo</option>
            <option value="round">Redondeado</option>
            <option value="oval">Ovalado</option>
            <option value="circle">Círculo</option>
        </select>
    </div>
</div>
<script>
    // ===================== FUNCIONALIDAD DE CAMBIO DE ESTILO DE BOTÓN =====================
    const botonVista = document.getElementById('boton-vista-previa');
    if (botonVista) {
        document.getElementById('color-fondo-boton').addEventListener('input', e => {
            botonVista.style.background = e.target.value;
        });
        document.getElementById('color-borde').addEventListener('input', e => {
            botonVista.style.borderColor = e.target.value;
        });
        document.getElementById('ancho-borde').addEventListener('input', e => {
            botonVista.style.borderWidth = e.target.value + 'px';
        });
        document.getElementById('forma-boton').addEventListener('change', e => {
            switch(e.target.value) {
                case 'rect': botonVista.style.borderRadius = '0'; break;
                case 'round': botonVista.style.borderRadius = '12px'; break;
                case 'oval': botonVista.style.borderRadius = '30px/15px'; break;
                case 'circle': botonVista.style.borderRadius = '50%'; break;
            }
        });
    }
</script>