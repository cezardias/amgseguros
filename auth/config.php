<?php
$host = "localhost";
$username = "amgseguros";
$password = "amgseguros";
$database = "samgseguros";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
?>
