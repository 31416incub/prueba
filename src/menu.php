<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Interactivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .menu button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .contenido {
            border: 1px solid #ccc;
            padding: 20px;
            min-height: 200px;
            background: #f9f9f9;
        }
        .activo {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="menu">
        <button id="btn-prediseno" class="activo">Prediseño</button>
        <button id="btn-crear">Crear nuevo</button>
        <button id="btn-modificar">Modificar</button>
        <button id="btn-eliminar">Eliminar</button>
    </div>
    <div class="contenido" id="contenido">
        <h2>Bienvenido al menú</h2>
        <p>Selecciona una opción para ver su contenido.</p>
    </div>

    <script>
        const botones = {
            'btn-prediseno': {
                titulo: 'Prediseño',
                contenido: `<h2>Prediseño</h2>
                <p>Esta es la sección de prediseño. Aquí puedes ver los diseños predefinidos.</p>`
            },
            'btn-crear': {
                titulo: 'Crear nuevo',
                contenido: `<h2>Crear nuevo</h2>
                <form>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre"><br><br>
                    <label for="descripcion">Descripción:</label><br>
                    <textarea id="descripcion" name="descripcion"></textarea><br><br>
                    <button type="submit">Guardar</button>
                </form>
                <p>Completa el formulario para crear un nuevo elemento.</p>`
            },
            'btn-modificar': {
                titulo: 'Modificar',
                contenido: `<h2>Modificar</h2>
                <p>Selecciona un elemento para modificarlo.</p>`
            },
            'btn-eliminar': {
                titulo: 'Eliminar',
                contenido: `<h2>Eliminar</h2>
                <p>Selecciona un elemento para eliminarlo.</p>`
            }
        };

        const contenidoDiv = document.getElementById('contenido');
        const menuBotones = document.querySelectorAll('.menu button');

        menuBotones.forEach(boton => {
            boton.addEventListener('click', function() {
                // Quitar clase activo de todos
                menuBotones.forEach(b => b.classList.remove('activo'));
                // Agregar clase activo al botón presionado
                this.classList.add('activo');
                // Cambiar el contenido
                const info = botones[this.id];
                if (info) {
                    contenidoDiv.innerHTML = info.contenido;
                }
            });
        });

        // Mostrar por defecto la sección de prediseño
        contenidoDiv.innerHTML = botones['btn-prediseno'].contenido;
    </script>
</body>
</html>
