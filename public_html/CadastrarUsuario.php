<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <title>Cadastre-se - Taverna Online</title>
  <link rel="shortcut icon" href="./img/logo.png" type="image/png">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/stylesForm.css">

</head>
<body>
    <?php
        require("./css/stylesForm.php");
   
    if ($_SESSION['usuario_existe']){
          echo "
            <script>
            window.onload = function(){
                alert('Usuário já cadastrado!');
            }    
            </script>
          ";

        }
        unset($_SESSION['usuario_existe']);

    ?>
  <div class="homepagebg align" style="height: 100vh !important;">
  <div class="grid align__item">

    <div class="register">
        
        <img class="logo" src="./img/logo_old.png">
      
      <h2 class ="tituloForms">Cadastre-se</h2>

      <p>Insira suas informações abaixo:</p>
      
      <form action="ValidarCadastro.php" method="POST" class="form">

        <div class="form__field">
            <input class="inputForm" type="name" placeholder="Nome" name="nome" id="nome" required>
        </div>

        <div class="form__field">
          <input class="inputForm" type="email" placeholder="E-mail" name="email" id="email" required>
        </div>

        <div class="form__field">
          <input class="inputForm" type="password"  placeholder="Senha" name="senha" id="senha" required>
        </div>

        <div class="form__field">
            <input class="inputForm" type="password"  placeholder="Confirmar Senha" name="confirmar_senha" id="confirmar_senha" required>
            <p><small id="msg-erro"></small></p>
        </div>

        <div class="form__field">
          <input class="inputForm" type="submit" value="Cadastrar">
        </div>

      </form>


    </div>

  </div>

</div>

  <script>
      var senha = document.getElementById("senha")
      , confirmar_senha = document.getElementById("confirmar_senha");
            
      function validar(){
        if(senha.value != confirmar_senha.value) {
            confirmar_senha.setCustomValidity("Senhas diferentes!");
        } else {
            confirmar_senha.setCustomValidity("");
          }

          document.getElementById('msg-erro').innerHTML = confirmar_senha.validationMessage;

      }
            
      senha.onchange = validar;
      confirmar_senha.onkeyup = validar;

  </script>
  
</body>
</html>
