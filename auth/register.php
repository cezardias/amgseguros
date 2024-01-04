<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Login - Registro</title>
</head>
<body>
  <h2>Registro</h2>
  <form action="process_register.php" method="POST">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Registrar">
  </form>
</body>
</html>
