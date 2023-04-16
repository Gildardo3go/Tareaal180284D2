<?php
// Conexión a la base de datos
$host = "localhost";
$user = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar si la conexión a la base de datos fue exitosa
if (!$conn) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario de registro
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Cifrar la contraseña del usuario con la función hash de PHP
$contrasena_cifrada = password_hash($contrasena, PASSWORD_DEFAULT);

// Insertar los datos del usuario en la tabla "usuarios"
$sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena_cifrada')";

if (mysqli_query($conn, $sql)) {
  echo "Registro exitoso";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
