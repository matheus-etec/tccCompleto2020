<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Taverna Online</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/logo.png" type="image/png">
</head>
<body>

    <?php
        require("conexao.php");
        require("./css/inicio.php");
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

    <section id="minhas-mesas">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 form-group">
                    <input type="pesquisa" class="form-control"   placeholder="Pesquise suas Mesas">
                </div>

                <div class=" col-md-2 dropdown">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Nome</option>
                        <option>Sistema</option>
                        <option>Cidade</option>
                      </select>
                    
                </div>

                <div class="col-md-2" id="btn-footer">
                    <button type="submit" class="btn button-blue">Pesquisar</button>
                </div>

            </div>

            <div class="col-md-12" id="resultado-mesas">
                
                <div class="col-md-12" id="card-mesa"> 
                    
                    <?php 
                            
                            $qry = "SELECT M.NM_Mesa, M.Sistema_Mesa
                                    FROM Mesa AS M 
                                    WHERE ID_Usuario_Criador = ".$_SESSION['id']." ";

                               if ($result = mysqli_query($conexao, $qry)) {

                                    
                                    
                                    $resultado = mysqli_fetch_array($result);
                                    echo '<h3> '.$resultado["NM_Mesa"].' </h3>';
                                    echo '<h4> '.$resultado["Sistema_Mesa"].' </h4>';
                                    
                                    while ($row = mysqli_fetch_row($result)) {

                                        echo '                        
                                        <h4> '.$row[1].' </h4>
                                        ';

                                    }
                                    
                                    mysqli_free_result($result);
                                }

                            mysqli_close($conexao);

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