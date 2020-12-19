<?php
session_start();
require("conexao.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "SELECT COUNT(*) AS total FROM Usuario WHERE Email_Usuario = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: CadastrarUsuario.php');
	exit;
}

$sql = "INSERT INTO Usuario (NM_Usuario, Email_Usuario,Senha_Usuario) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($sql) === TRUE) {
  $_SESSION['status_cadastro'] = true;
  header('Location: LoginUsuario.php');
  exit;
}
exit;
$conexao->close();
?>