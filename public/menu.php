<?php
// Este archivo muestra el menú principal con los 4 botones
// Es incluido en index.php para mostrar la navegación principal de la aplicación
?>

<!-- Contenedor principal de navegación -->
<nav>
    <!-- Botón para mostrar la vista Prediseñado -->
    <!-- data-view="predisenado" es usado por JavaScript para identificar qué vista cargar -->
    <button class="menu-btn" data-view="predisenado">Prediseñado</button>
    
    <!-- Botón para mostrar la vista Crear nuevo -->
    <!-- data-view="crear_nuevo" carga el editor completo con vista previa -->
    <button class="menu-btn" data-view="crear_nuevo">Crear nuevo</button>
    
    <!-- Botón para mostrar la vista Modificar -->
    <!-- data-view="modificar" permitirá editar botones existentes -->
    <button class="menu-btn" data-view="modificar">Modificar</button>
    
    <!-- Botón para mostrar la vista Eliminar -->
    <!-- data-view="eliminar" permitirá eliminar botones guardados -->
    <button class="menu-btn" data-view="eliminar">Eliminar</button>
</nav> 