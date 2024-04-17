<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BG - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/745f5c8a37.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: black;
        }

        div {
            background-color: gray;
            color: white;
            width: 40%;
            border: 3px solid yellow;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <?php

    include "./model/conection.php";
    include "./controller/controllerEnter.php";
    $sql = $conexion->query("SELECT * FROM usuarios");

    ?>

    <center> <br><br>
        <form action="./controller/controllerEnter.php" method="post">
            <div>
                <img src="images/bgLogo(Invertido).png" width="20%" height="20%"> <br><br>

                <h1>BG</h1> <br><br>

                <label for="userL">User: </label> <br><br>
                <input type="text" name="userL" id="userL"> <br><br><br>

                <label for="passwordL">Password: </label> <br><br>
                <input type="password" name="passwordL" id="passwordL">
                <button class="btn btn-light" type="button" onclick="showPassword()">
                    <img src="images/iconoMostrarPW.png" width="15px" height="15px" id="mostrarPW">
                </button> <br><br><br>

                <script type="text/javascript">
                    function showPassword() {
                        var tipo = document.getElementById("passwordL");

                        if (tipo.type == "password") {
                            tipo.type = "text";
                        }
                        else {
                            tipo.type = "password";
                        }
                    }
                </script>

                <button class="btn btn-warning" id="btnEnter" value="OK">Enter</button> <br><br><br>
            </div>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>