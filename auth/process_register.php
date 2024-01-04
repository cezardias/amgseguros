<?php
$host = "localhost";
$username = "amgseguros";
$password = "amgseguros";
$database = "amgseguros";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];

  // Inserir os dados do novo usuário no banco de dados
  // Substitua as linhas abaixo com sua lógica de inserção

  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email' , '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "Registro realizado com sucesso!";
    echo '<script>window.location.href = "../admin/login.html";</script>';
  } else {
    echo "Erro ao registrar o usuário: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
