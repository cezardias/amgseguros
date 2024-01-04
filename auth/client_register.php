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
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];

  // Inserir os dados do novo usuário no banco de dados
  // Substitua as linhas abaixo com sua lógica de inserção

  $sql = "INSERT INTO clientes (nome, email, telefone) VALUES ('$nome', '$email' , '$telefone')";
  if (mysqli_query($conn, $sql)) {
    echo "Registro realizado com sucesso!";
    // echo '<script>window.location.href = "../index.html";</script>';
  } else {
    echo "Erro ao registrar o usuário: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
