<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Login efetuado com sucesso!";
} else {
  echo "Erro: email ou senha incorretos.";
}

$conn->close();
?>
