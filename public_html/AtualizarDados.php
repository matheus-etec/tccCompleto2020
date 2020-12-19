<?php 

    require("conexao.php");

    $ID_Usuario     = $_POST['id'];
    $NM_Usuario   = $_POST['nome'];
    $Email_Usuario  = $_POST['email'];
    $Senha_Usuario = $_POST['senha']; 

    $qry = "UPDATE Usuario SET NM_Usuario = ?, Email_Usuario = ?, Senha_Usuario = ? WHERE ID_Usuario = ?";
    $stmt = mysqli_prepare($conexao, $qry);

    mysqli_stmt_bind_param($stmt, "sssi", $val1, $val2, $val3, $val4);
 
    $val1 = $NM_Usuario;
    $val2 = $Email_Usuario;
    $val3 = $Senha_Usuario;
    $val4 = $ID_Usuario;

    mysqli_stmt_execute($stmt);
  
    mysqli_close($conexao);

    header('Location: PerfilUsuario.php');

?>