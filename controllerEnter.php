<?php

if (isset($_POST["btnEnter"])) {
    // Verificar que se enviaron los datos del formulario
    if (!empty($_POST["userL"]) && !empty($_POST["passwordL"])) {
        try {
            //Obtener los datos del formulario
            $user = $_POST["userL"];
            $password = $_POST["passwordL"];

            // Utilizar una consulta preparada para evitar la inyección de SQL
            $sql = $conexion->prepare("SELECT * FROM usuarios WHERE user = ? AND password = ?");
            $sql->bind_param("ss", $user, $password);
            $sql->execute();
            $result = $sql->get_result();

            // Verificar si se encontraron filas en el resultado de la consulta
            if ($result->num_rows > 0) {
                // Las credenciales son válidas, redirigir al usuario a la página indexUser.php
                header("Location: ../indexUser.php");
                exit;
            } else {
                echo ("<div class='alert alert-danger'>Credenciales inválidas.</div>");
            }
        } catch (Exception $e) {
            echo ("<div class='alert alert-danger'>Error al procesar el formulario.</div>");
        }
    } else {
        echo ("<div class='alert alert-danger'>Por favor, ingresa un usuario y una contraseña.</div>");
    }
}

?>


<script>
    (function () {
        var not = function () {
            window.history.replaceState(null, null, window.location.pathname);
        }
        setTimeout(not, 0);
    }())
</script>