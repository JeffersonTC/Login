<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <form class="form" action="" method="POST">
        <h1>Registrate</h1>
        <label for="username">Usuarios:
            <input type="text" name="username" class="input">
        </label>

        <label for="password">Contraseña:
            <input type="password" name="password" class="input">
        </label>
        <div class="btn_log">
            <input type="submit" class="btn" name="registrate" value="Registrar"><br>
            <a class="btn" href="login.php" >Login</a>
        </div>
    </form>

    <?php
    include("Registro.php")
    ?>

</body>

</html>