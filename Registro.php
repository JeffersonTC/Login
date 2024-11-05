<?php
include("Conexion_DB.php"); 
session_start();

if (isset($_POST['registrate'])) {
    if (
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conexion->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);

        if ($stmt->execute()) {
            echo "Hecho el registro";
            header('Location: ./page.php');
         
            exit; // Asegúrate de salir después de redirigir  
        } else {
           echo " <h3>No te has podido registrar . $stmt->error .</h3>";
       
        }

        $stmt->close();
    } else {
        ?>
        <h4>Completa todos los campos</h4>
<?php
    }
}

?>