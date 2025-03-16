<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <fieldset>
            <legend><h2>Iniciar Sesión</h2></legend>
            <form action="login.php" method="post">
                <input type="email" name="email" id="email" placeholder="Correo Electrónico" required>
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
                <input type="submit" value="Ingresar" id="btnIngresar">
            </form>
        </fieldset>
    </main>
</body>
</html>