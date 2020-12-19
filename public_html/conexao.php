<?php

    $host = 'localhost';
    $user = 'id15564679_sa';
    $pass = '>}%VKdQA24x37US*';
    $db = 'id15564679_db_tvo_des';

    $conexao = mysqli_connect($host, $user, $pass, $db);
    
    mysqli_query($conexao, "SET NAMES 'utf8'");
    mysqli_query($conexao, 'SET character_set_connection=utf8');
    mysqli_query($conexao, 'SET character_set_client=utf8');
    mysqli_query($conexao, 'SET character_set_results=utf8');

    if (!$conexao) {
        $mensagem = "Erro de conexão ".mysqli_connect_error()."-".mysqli_connect_error(); 

        echo '<script> alert("'.$mensagem.'"); </script>'; 

    }

?>