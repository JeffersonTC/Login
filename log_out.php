<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array(); // Limpia todas las variables de sesión

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: login.php?message=logout_success");
exit(); // Asegúrate de llamar a exit() después de header()


?>

