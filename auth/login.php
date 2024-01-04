<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Conectar ao banco de dados (substitua com suas próprias credenciais)
  $servername = "localhost";
  $dbusername = "amgseguros";
  $dbpassword = "amgseguros";
  $dbname = "amgseguros";

  $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

  // Verificar se a conexão foi estabelecida com sucesso
  if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Consulta SQL para verificar as credenciais
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Credenciais corretas, iniciar sessão e redirecionar para a página de dashboard
    $_SESSION["username"] = $username;
    header("Location: ../admin/index.html");
    exit();
  } else {
    // Credenciais inválidas, exibir mensagem de erro
    echo "Credenciais inválidas. Tente novamente.";
  }

  // Fechar a conexão com o banco de dados
  $conn->close();
}
?>

