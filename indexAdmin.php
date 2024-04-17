<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BG - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/745f5c8a37.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center text-secondary p-4">BG</h1>

    <?php

    include "./model/conection.php";
    #include "./controlador/controladorRegistrar.php";
    #include "./controlador/controladorModificar.php";
    #include "./controlador/controladorEliminar.php";
    $sql = $conexion->query("SELECT * FROM usuarios");

    ?>

    <div class="p-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registrar
        </button>

        <!-- Modal Registrar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" enctype="multipart/form-data" method="POST">
                            <input type="file" name="txtimg" placeholder="Ingresar Imagen">
                            <button class="w-100 btn btn-primary mt-2" name="btnRegistrar" value="OK">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-hover w-100">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">USER</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">IMAGEN</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($datos = $sql->fetch_object()) { ?>

                    <tr>
                        <th scope="row"><?= $datos->idUsuario ?></th>
                        <th scope="row"><?= $datos->nombreUsuario ?></th>
                        <th scope="row"><?= $datos->apellidosUsuario ?></th>
                        <th scope="row"><?= $datos->user ?></th>
                        <th scope="row"><?= $datos->password ?></th>
                        <td>
                            <img style="width: 60px;" src="data:image/jpg;base64,<?= base64_encode($datos->imgUsuario) ?>"
                                alt="">
                        </td>
                        <td>
                            <!--    Botón Modificar Registro    -->
                            <a href="" data-bs-toggle="modal" data-bs-target="#modalModificar</?= $datos->idUsuario ?>"
                                class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <!--    Botón Eliminar Registro    -->
                            <a onclick="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>