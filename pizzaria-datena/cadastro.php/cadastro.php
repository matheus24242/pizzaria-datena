<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

if ($conn->query($sql) === TRUE) {
  echo "Usuário cadastrado com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


