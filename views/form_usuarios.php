<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uusarios</title>
</head>
<body>
<h1>Ingresando usuarios</h1>
    <form method="POST" action="./backend/guardar.php">
        <label for="usuario"></label>
        <input type="text" placeholder="Usuario" id="usuario" name="usuario">
        <br>
        <label for="pass"></label>
        <input type="text" placeholder="passwword" id="contrasena" name="contrasena">
        <br>
        <input type="submit" value="submit" id="form_usuario">
    </form>
</body>
</html>