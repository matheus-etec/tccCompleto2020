<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Taverna Online</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <?php 
        require("./css/style.php");
        require("conexao.php");
    ?>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bkg-color ">
            <div style="height: 100px;">
                <div class="mh-100px" style="width: 100px; height: 100px;">
                    <a href="TelaInicial.php">
                        <img src="img/logo.png" class="img-fluid mb-2 " alt="Imagem responsiva">
                    </a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto ">
                
                <li class="nav-item align-middle my-auto  li-itens ">
                    <a class="nav-link my-auto" href="TelaInicial.php"> <h5 class="font-weight-bold text-white my-auto">Início</h5></a>
                </li>
                
                <li class="nav-item align-middle my-auto li-itens">
                    <a class="nav-link my-auto" href="PesquisarMesa.php"> <h6 class="text-white my-auto">Pesquisar Mesas</h6></a>
                </li>

                <li class="nav-item align-middle my-auto li-itens">
                    <a class="nav-link my-auto" href="CriarMesa.php"> <h6 class="text-white my-auto">Criar Mesas</h6></a>
                </li>

                <li class="nav-item align-middle my-auto  li-itens">
                    <a class="nav-link my-auto" href="PerfilUsuario.php"> <h6 class="text-white my-auto">Perfil</h6></a>
                </li>
                </ul>
                <div style="height: 100px;">
                    <div class="mh-70px" style="width: 70px; height: 90px;">
                         <a href="Logout.php">
                        <img src="img/profile-user.png" class="img-fluid mt-3" alt="Imagem responsiva">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3>Atualizar Informações</h3>

                    <?php 
                        //$idConsulta = $_GET['ID_Usuario'];
                        
                        $qry = "SELECT ID_Usuario, NM_Usuario, Email_Usuario, Senha_Usuario
                                    FROM Usuario WHERE ID_Usuario = ".$_SESSION['id']." ";
                        if ($result = mysqli_query($conexao, $qry)) {

                            while ($row = mysqli_fetch_row($result)) {
                                $id    = $row[0];
                                $nome  = $row[1];
                                $email    = $row[2];
                                $senha = $row[3];
                            }
                            
                            mysqli_free_result($result);
                        }   

                        mysqli_close($conexao);

                    
                        echo '
                        <form action="AtualizarDados.php" method="POST">
                            <div class="form-group">
                                <label for="id">Código</label>
                                <input type="text" value="'.$id.'" class="form-control" id="id" name="id" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" value="'.$nome.'" class="form-control" id="nome" name="nome">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" value="'.$email.'" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" value="'.$senha.'" class="form-control" id="senha" name="senha">
                            </div>

                            <button type="submit" class="btn btn-success">Atualizar Dados</button>
                        </form>
                        ';
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="align-bottom" id="contato">
        <div class="container">
            <div class="row justify-content-center" >
                <div class="col-md-12 text-center">
                    <a href="#" target="_blank"><img src="img/facebook.svg" class="rounded-circle"></a>
                    <a href="#" target="_blank"><img src="img/whatsapp-contato.svg" class="rounded-circle mr-5 ml-5"></a>
                    <a href="#" target="_blank"><img src="img/instagram.svg" class="rounded-circle "></a>
                </div>

                <div class="col-md-12 text-center mt-5">
                    <h3>@Taverna Online todos os direitos reservados</h3>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>