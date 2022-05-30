<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - VetAdmin</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="controlador/login.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form id="form-register" class="formulario__register" method="post">
                    <h2>Regístrarse</h2>
                    <input type="text" id="fullname" placeholder="Nombre completo" name="nombre_completo">
                    <span id="validator-fullname" class="field-validator">Campo
                        requerido</span>
                    <span id="validator-fullname-only-letters" class="field-validator">Solo se permiten texto</span>
                    <input type="text" id="email" placeholder="Correo Electronico" name="correo">
                    <span id="validator-email" class="field-validator">Campo
                        requerido</span>
                    <span id="validator-email-regex" class="field-validator">Correo inválido</span>
                    <input type="text" id="username" placeholder="Usuario" name="usuario">
                    <span id="validator-username" class="field-validator">Campo
                        requerido</span>
                    <input type="password" id="password" placeholder="Contraseña" name="contrasena">
                    <span id="validator-password" class="field-validator">Campo
                        requerido</span>
                    <input id="confirm-password" type="password" placeholder="Verificar Contraseña" name="verificar">
                    <span id="validator-verify-password" class="field-validator">Contraseñas no coinciden</span>
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>