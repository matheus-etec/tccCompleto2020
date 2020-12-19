<?php
session_start();
// Conexão com o banco de dados
include('conexao.php');

if(empty($_POST['email'])||empty($_POST['senha'])) {
    header('Location: LoginUsuario.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select id_Usuario,NM_Usuario, Email_Usuario, Senha_Usuario from Usuario where Email_Usuario = '{$email}' and Senha_Usuario= '{$senha}' ";



$result = mysqli_query($conexao, $query, MYSQLI_STORE_RESULT);
$row = mysqli_num_rows($result);
$resultado = mysqli_fetch_array($result);

$id = $resultado['id_Usuario'];
$Usuario = $resultado['NM_Usuario'];


if ($row == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['id']    = $id;
    $_SESSION['usuario']    = $Usuario;
    header('Location: TelaInicial.php');
    exit();
} else {
    header('Location: LoginUsuario.php');
    exit();
}




?>