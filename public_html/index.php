<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta http-equiv="content-type" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Taverna Online</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/png">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>

  <body>

  <?php
    require("conexao.php");
    require("./css/index.php");
  ?>
   
    <div class="homepagebg">
      <div class="botoes-nav container-fluid justify-content-end my-5">
        <form class="d-flex">
          <a class="nav-link active btn btn-outline" href="LoginUsuario.php">Entrar</a>
          <a class="nav-link active btn btn-outline" href="CadastrarUsuario.php">Cadastrar</a>
        </form>
      </div>
      <div class="logo">
        <nav class="nav">
          <a class="navbar-brand" href="index.php">
            <img src="./img/logo_old.png" alt="logo" width="340" height="250">
          </a>
        </nav>
      </div>
      <div class="texto-logo">
        <p><strong>Jogue RPG de mesa com seus amigos!</strong></p>
      </div>
    </div>

    <div id="imagem-corpo">
      <div class="imagem-corpo-titulo">
        <h2>Boas-vindas à Taverna Online, nobre viajante.</h2>
          <section class="corpo">
            <p>Este site é apenas um dos artifícios da tecnomagia moderna à fim de encontrar parceiros para desvendar os mistérios inacabaveis das inúmeras dimensões, encontre seu Mestre e Jogadores tão audaciosos como você, monte sua própria mesa com seu tema favorito ou busque por pessoas que tem os mesmos interesses que os seu.
                Esta ferramenta agirá puramente como mediador, ou seja, jogadores poderão achar mesas de temas de sua preferência e encontrar outros jogadores que se interessam por estas através de diversas características que podem te interessar, como jogadores próximos geograficamente ou que se interessem pelas mesmas estripulias que te animam a se juntar ao mundo de RPG.</p>
          </section>

          <section class="button-blue">

            <form method="GET" action="CadastrarUsuario.php">
              <button type="submit" class="btn btn-outline">Crie sua conta</button>
            </form>

          </section>
      </div>
          <section class="rodape">
            <footer>
                <div class="col-md-12 text-center mt-5">
                    <h5>@Taverna Online todos os direitos reservados</h5>
                </div>
            </footer>
          </section>
    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>