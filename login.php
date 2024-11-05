<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form class="form" action="" method="post">
        <h1>Login</h1>
        <label for="username">Usuario:
            <input type="text" name="username" class="input">
        </label>

        <label for="password">Contraseña:
            <input type="password" name="password" class="input">
        </label>
        <div class="btn_log">
            <input type="submit" class="btn" name="login" value="login">
            <a class="btn" href="index.php">Registro</a>
        </div>
    </form>

    <?php
    include("login_db.php")
    ?>
</body>

</html>