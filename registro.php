<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>


<!-- Contenido de la página de registro -->
<body class = "body-registro">

<form action="respuesta.php" method="post">

    <div class="Registro">
        <img class="avatar" src="img/Logo.webp" alt="Logo de Yummi">
        <h1>Regístrate Aquí</h1>

        <form>
            
             <!--Usuario-->
             <label for="Usuario">Usuario</label>                                                   <!--Crea el cuadro de texto en donde se va a colocar el nombre de usuario.-->     
             <input name="usuario" type="text" placeholder="Ingresa tu usuario">                                   <!--Indica que tipo de caracteres se van a colocar y nos muestra que se va a indicar antes de que ingrese cualquier cosa el usuario.-->
 

             <!--Nombre completo-->
             <label for="Nombre">Nombre completo</label>                                            <!--Crea el cuadro de texto en donde se va a colocar el nombre completo.-->     
             <input name="nombre_completo" type="text" placeholder="Ingresa tu nombre">                                    <!--Indica que tipo de caracteres se van a colocar y nos muestra que se va a indicar antes de que ingrese cualquier cosa el usuario.-->


             <!--direccion-->
             <label for="Telefono">Telefono</label>                                                  <!--Crea el cuadro de texto en donde se va a colocar el numero del telefono.-->     
             <input name="telefono" type="text" placeholder="Ingresa tu numero de telefono">         <!--Indica que tipo de caracteres se van a colocar y nos muestra que se va a indicar antes de que ingrese cualquier cosa el usuario.-->



            <!-- Correo electrónico -->
            <label for="Correo">Correo Electrónico</label>
            <input name="correo" type="email" placeholder="Ingresa tu correo electrónico">

            <!-- Contraseña -->
            <label for="Contraseña">Contraseña</label>                                                                <!--Crea el cuadro de texto en donde se va a colocar la contraseña.-->
            <input name="contraseña" type="password" id="contraseñaInput" placeholder="Ingresa tu contraseña">        <!--Campo de contraseña oculto.-->
            <span class="toggle-password" onclick="mostrarContraseña()">Mostrar contraseña</span>                     <!--span: Elemento contenedor del botón de alternancia. onclick="mostrarContrasena()": Llama a la función mostrarContrasena() cuando se hace clic en el botón de alternancia. input[type="submit"]: Botón de envío del formulario.-->
            

            <script>                                                                                    
                function mostrarContraseña() {                                                      //Función que cambia el tipo de entrada de contraseña entre "password" y "text" al hacer clic en el botón.
                    var contraseñaInput = document.getElementById("contraseñaInput");               //document.getElementById("contrasenaInput"): Obtiene la referencia al elemento de entrada de contraseña por su ID
                    if (contraseñaInput.type === "password") {                                      //Verifica si el tipo de entrada de contraseña es "password".
                        contraseñaInput.type = "text";                                              //Cambia el tipo de entrada de contraseña a "text" (visible).
                    } else {                                                                        //Cambia el tipo de entrada de contraseña a "text" (visible).
                        contraseñaInput.type = "password";
                    }
                }
            </script>



            <!-- Botón de registro -->
            <input type="submit" value="Registrarse">

             <!--Link que lleva a la pagina de inicio-->
            <a href="index.html">¿Ya tienes una cuenta? Inicia sesión aquí</a>

        </form>
        
    </div>

</form>
</body>
</html>