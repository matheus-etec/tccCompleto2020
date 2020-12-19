<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <title>Login - Taverna Online</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/stylesForm.css">
  <link rel="shortcut icon" href="./img/logo.png" type="image/png">
</head>
<body>
    <?php

        require("./css/stylesForm.php");

        if ($_SESSION['status_cadastro']){
           echo "
            <script>
            window.onload = function(){
                alert('Usuário cadastrado com sucesso!');
            }    
            </script>
          ";
        }
        unset($_SESSION['status_cadastro']);
    ?>
  <div class="homepagebg align" style="height: 100vh !important;">
    <div class="grid align__item">

      <div class="register">
          
          <img class="logo" src="./img/logo_old.png">
        
        <h2 class="tituloForms">Login</h2>

        <form action="ValidarLogin.php" method="POST" class="form">

          <div class="form__field">
            <input class="inputForm" type="email" placeholder="Email" id="email" name="email">
          </div>

          <div class="form__field">
            <input class="inputForm" type="password" placeholder="Senha" id="senha" name="senha">
          </div>

          <div class="form__field">
            <input class="inputForm" type="submit" value="Entrar">
          </div>

        </form>

        <p>Ainda não tem uma conta? <a class="linkCadastrar" href="CadastrarUsuario.php">Cadastre-se</a></p>

      </div>

    </div>

</div>

</body>
</html>
