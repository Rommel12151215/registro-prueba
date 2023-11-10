<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Aquí deberías guardar los datos del usuario en una base de datos.
  // Por simplicidad, en este ejemplo solo los mostramos.
  echo "Has registrado una nueva cuenta con el nombre $nombre, el email $email y la contraseña $password.";
 }
?>
