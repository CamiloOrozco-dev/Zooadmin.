<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/master.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>VetAdmin Registro</title>
</head>

<body>
    <!-- TODO: Terminar registro -->
    <?php

    if (!empty($message)) : ?>
        <div class="alert alert-warning" role="alert">
            <?php $message ?>
        <?php endif; ?>
        </div>




        <!-- Form-->
        <div class="form">
            <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                    <h1>Iniciar sesión</h1>
                </div>
                <div class="form-content">
                    <form>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" id="email" name="email" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="password">contraseña</label>
                            <input type="password" id="password" name="password" required="required" />
                        </div>
                        <div class="form-group">
                            <button type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
            <form action="registro.php" method="post">
                <div class="form-panel two">

                    <div class="form-header">
                        <h1>Registrate </h1>
                    </div>
                    <div class="form-content">
                        <form>
                            <div class="form-group">
                                <label for="DNI">Identificación</label>
                                <input type="number" id="DNI" name="DNI" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="tipo_DNI">Tipo de Identificación</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>seleccione una opción...</option>
                                    <option value="1">C.C</option>
                                    <option value="2">T.I</option>
                                    <option value="3">C.E</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="apellido">apellido</label>
                                <input type="text" id="apellido" name="apellido" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <input type="number" id="telefono" name="telefono" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" id="email" name="email" required="required" />
                            </div>

                            <div class="form-group">
                                <label for="password">contraseña</label>
                                <input type="password" id="password" name="password" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="password">Confirmar contraseña</label>
                                <input type="password" id="password" name="password" required="required" />
                            </div>
                            <div class="form-group">
                                <button type="submit">Registar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>
        <!-- partial -->

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
        <script src="../js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>