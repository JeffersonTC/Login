<?php
session_start();
include("Conexion_DB.php");

if (isset($_POST['login'])) {
    echo "Formulario enviado"; // Verificación inicial: El formulario fue enviado

    if (
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1

    ) {
        echo "Campos de usuario y contraseña recibidos.<br>";

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        echo "Username ingresado: " . htmlspecialchars($username) . "<br>";
        // Verificar la conexión a la base de datos
        if (!$conexion) {
            die("Error de conexión: " . $conexion->connect_error); // Mensaje de error si falla la conexión
        }
        echo "Conexión a la base de datos exitosa.<br>";

        $stmt = $conexion->prepare("SELECT password FROM usuarios WHERE username = ?");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $conexion->error); // Error en la consulta
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        echo "Error de la consulta: " . $stmt->error . "<br>";

        $stmt->bind_result($hashedPassword);
        echo "Consulta ejecutada.<br>";

        if ($stmt->fetch()) {
            echo "Hash almacenado: " . htmlspecialchars($hashedPassword) . "<br>";
            echo "Contraseña ingresada: " . htmlspecialchars($password) . "<br>";
            echo "Usuario encontrado.<br>";
            if (password_verify($password, $hashedPassword)) {
                var_dump($password);
                var_dump($hashedPassword);
                echo "Contraseña verificada correctamente.<br>";
                $_SESSION['username'] = $username;
                // Contraseña correcta, iniciar sesión
                echo " <script> alert('Inicio de Session exitoso')
                window.location.href = 'page.php';
                </script>";

                exit();
            } else {
                echo "<h3>Nombre de usuario o contraseña incorrectos</h3>";
            }
        }
    } else {

        echo "<h4>Completa todos los campos</h4>";
    }
}
