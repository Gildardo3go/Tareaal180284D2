<!DOCTYPE html>
<html>
  <head>
    <title>Registro de Usuario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="procesar_registro.php">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" name="email" required>
      <br>
      <label for="contrasena">Contraseña:</label>
      <input type="password" name="contrasena" required>
      <br>
      <input type="submit" value="Registrar">
    </form>
  </body>
</html>
