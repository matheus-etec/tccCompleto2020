<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Criar Mesas - Taverna Online</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./img/logo.png" type="image/png">
    <!-- CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="../favicon/favicon.ico" />
    <link rel="icon" sizes="16x16 32x32 64x64" href="../favicon/favicon.ico" />
    <link
      rel="icon"
      type="image/png"
      sizes="196x196"
      href="../favicon/favicon-192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="160x160"
      href="../favicon/favicon-160.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="96x96"
      href="../favicon/favicon-96.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="64x64"
      href="../favicon/favicon-64.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../favicon/favicon-32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../favicon/favicon-16.png"
    />
    <link rel="apple-touch-icon" href="../favicon/favicon-57.png" />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="../favicon/favicon-114.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="../favicon/favicon-72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="144x144"
      href="../favicon/favicon-144.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="60x60"
      href="../favicon/favicon-60.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="120x120"
      href="../favicon/favicon-120.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../favicon/favicon-76.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="152x152"
      href="../favicon/favicon-152.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="../favicon/favicon-180.png"
    />
    <script src="../js/script.js"></script>
  </head>
  <body>
      <?php
        require("./css/style.php")
      ?>
    <div class="homepagebg">
      <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#1d3557">
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
      <div
        style="background: white; padding: 2.5vw; margin: 2.5vh; height: auto;"
      >
        <h1>Cadastro de Mesas</h1>
        <p>
          <form onsubmit="loginmock();return false;">
            <div style="width: 100%">
                Nome da Mesa: <input id="NM_Mesa" class="user form-control" />
            </div>
            <div style="width: 100%">
                <div style="width: 74%; float: left; margin-right: 5px">
                  Sistema: <input id="Sistema_Mesa" class="user form-control" />
                </div>
                <div style="width: 25%; float: right; overflow: hidden">
                    Qt. de Jogadores:
                    <select class="form-control" id="QT_Jogadores">
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>+</option>
                    </select>
                </div>
            </div>
            <div style="width: 100%">
              Cidade:
              <select class="form-control" id="Cidade_Mesa">
                  <option></option>
                  <option>Adamantina</option>
                  <option>Adolfo</option>
                  <option>Aguaí</option>
                  <option>Águas da Prata</option>
                  <option>Águas de Lindóia</option>
                  <option>Águas de Santa Bárbara</option>
                  <option>Águas de São Pedro</option>
                  <option>Agudos</option>
                  <option>Alambari</option>
                  <option>Alfredo Marcondes</option>
                  <option>Altair</option>
                  <option>Altinópolis</option>
                  <option>Alto Alegre</option>
                  <option>Alumínio</option>
                  <option>Álvares Florence</option>
                  <option>Álvares Machado</option>
                  <option>Álvaro de Carvalho</option>
                  <option>Alvinlândia</option>
                  <option>Americana</option>
                  <option>Américo Brasiliense</option>
                  <option>Américo de Campos</option>
                  <option>Amparo</option>
                  <option>Analândia</option>
                  <option>Andradina</option>
                  <option>Angatuba</option>
                  <option>Anhembi</option>
                  <option>Anhumas</option>
                  <option>Aparecida</option>
                  <option>Aparecida D'oeste</option>
                  <option>Apiaí</option>
                  <option>Araçariguama</option>
                  <option>Araçatuba</option>
                  <option>Araçoiaba da Serra</option>
                  <option>Aramina</option>
                  <option>Arandu</option>
                  <option>Arapeí</option>
                  <option>Araraquara</option>
                  <option>Araras</option>
                  <option>Arco-íris</option>
                  <option>Arealva</option>
                  <option>Areias</option>
                  <option>Areiópolis</option>
                  <option>Ariranha</option>
                  <option>Artur Nogueira</option>
                  <option>Arujá</option>
                  <option>Aspásia</option>
                  <option>Assis</option>
                  <option>Atibaia</option>
                  <option>Auriflama</option>
                  <option>Avaí</option>
                  <option>Avanhandava</option>
                  <option>Avaré</option>
                  <option>Bady Bassitt</option>
                  <option>Balbinos</option>
                  <option>Bálsamo</option>
                  <option>Bananal</option>
                  <option>Barão de Antonina</option>
                  <option>Barbosa</option>
                  <option>Bariri</option>
                  <option>Barra Bonita</option>
                  <option>Barra do Chapéu</option>
                  <option>Barra do Turvo</option>
                  <option>Barretos</option>
                  <option>Barrinha</option>
                  <option>Barueri</option>
                  <option>Bastos</option>
                  <option>Batatais</option>
                  <option>Bauru</option>
                  <option>Bebedouro</option>
                  <option>Bento de Abreu</option>
                  <option>Bernardino de Campos</option>
                  <option>Bertioga</option>
                  <option>Bilac</option>
                  <option>Birigui</option>
                  <option>Biritiba-mirim</option>
                  <option>Boa Esperança do Sul</option>
                  <option>Bocaina</option>
                  <option>Bofete</option>
                  <option>Boituva</option>
                  <option>Bom Jesus Dos Perdões</option>
                  <option>Bom Sucesso de Itararé</option>
                  <option>Borá</option>
                  <option>Boracéia</option>
                  <option>Borborema</option>
                  <option>Borebi</option>
                  <option>Botucatu</option>
                  <option>Bragança Paulista</option>
                  <option>Braúna</option>
                  <option>Brejo Alegre</option>
                  <option>Brodowski</option>
                  <option>Brotas</option>
                  <option>Buri</option>
                  <option>Buritama</option>
                  <option>Buritizal</option>
                  <option>Cabrália Paulista</option>
                  <option>Cabreúva</option>
                  <option>Caçapava</option>
                  <option>Cachoeira Paulista</option>
                  <option>Caconde</option>
                  <option>Cafelândia</option>
                  <option>Caiabu</option>
                  <option>Caieiras</option>
                  <option>Caiuá</option>
                  <option>Cajamar</option>
                  <option>Cajati</option>
                  <option>Cajobi</option>
                  <option>Cajuru</option>
                  <option>Campina do Monte Alegre</option>
                  <option>Campinas</option>
                  <option>Campo Limpo Paulista</option>
                  <option>Campos do Jordão</option>
                  <option>Campos Novos Paulista</option>
                  <option>Cananéia</option>
                  <option>Canas</option>
                  <option>Cândido Mota</option>
                  <option>Cândido Rodrigues</option>
                  <option>Canitar</option>
                  <option>Capão Bonito</option>
                  <option>Capela do Alto</option>
                  <option>Capivari</option>
                  <option>Caraguatatuba</option>
                  <option>Carapicuíba</option>
                  <option>Cardoso</option>
                  <option>Casa Branca</option>
                  <option>Cássia Dos Coqueiros</option>
                  <option>Castilho</option>
                  <option>Catanduva</option>
                  <option>Catiguá</option>
                  <option>Cedral</option>
                  <option>Cerqueira César</option>
                  <option>Cerquilho</option>
                  <option>Cesário Lange</option>
                  <option>Charqueada</option>
                  <option>Clementina</option>
                  <option>Colina</option>
                  <option>Colômbia</option>
                  <option>Conchal</option>
                  <option>Conchas</option>
                  <option>Cordeirópolis</option>
                  <option>Coroados</option>
                  <option>Coronel Macedo</option>
                  <option>Corumbataí</option>
                  <option>Cosmópolis</option>
                  <option>Cosmorama</option>
                  <option>Cotia</option>
                  <option>Cravinhos</option>
                  <option>Cristais Paulista</option>
                  <option>Cruzália</option>
                  <option>Cruzeiro</option>
                  <option>Cubatão</option>
                  <option>Cunha</option>
                  <option>Descalvado</option>
                  <option>Diadema</option>
                  <option>Dirce Reis</option>
                  <option>Divinolândia</option>
                  <option>Dobrada</option>
                  <option>Dois Córregos</option>
                  <option>Dolcinópolis</option>
                  <option>Dourado</option>
                  <option>Dracena</option>
                  <option>Duartina</option>
                  <option>Dumont</option>
                  <option>Echaporã</option>
                  <option>Eldorado</option>
                  <option>Elias Fausto</option>
                  <option>Elisiário</option>
                  <option>Embaúba</option>
                  <option>Embu</option>
                  <option>Embu-guaçu</option>
                  <option>Emilianópolis</option>
                  <option>Engenheiro Coelho</option>
                  <option>Espírito Santo do Pinhal</option>
                  <option>Espírito Santo do Turvo</option>
                  <option>Estrela D'oeste</option>
                  <option>Estrela do Norte</option>
                  <option>Euclides da Cunha Paulista</option>
                  <option>Fartura</option>
                  <option>Fernandópolis</option>
                  <option>Fernando Prestes</option>
                  <option>Fernão</option>
                  <option>Ferraz de Vasconcelos</option>
                  <option>Flora Rica</option>
                  <option>Floreal</option>
                  <option>Flórida Paulista</option>
                  <option>Florínia</option>
                  <option>Franca</option>
                  <option>Francisco Morato</option>
                  <option>Franco da Rocha</option>
                  <option>Gabriel Monteiro</option>
                  <option>Gália</option>
                  <option>Garça</option>
                  <option>Gastão Vidigal</option>
                  <option>Gavião Peixoto</option>
                  <option>General Salgado</option>
                  <option>Getulina</option>
                  <option>Glicério</option>
                  <option>Guaiçara</option>
                  <option>Guaimbê</option>
                  <option>Guaíra</option>
                  <option>Guapiaçu</option>
                  <option>Guapiara</option>
                  <option>Guará</option>
                  <option>Guaraçaí</option>
                  <option>Guaraci</option>
                  <option>Guarani D'oeste</option>
                  <option>Guarantã</option>
                  <option>Guararapes</option>
                  <option>Guararema</option>
                  <option>Guaratinguetá</option>
                  <option>Guareí</option>
                  <option>Guariba</option>
                  <option>Guarujá</option>
                  <option>Guarulhos</option>
                  <option>Guatapará</option>
                  <option>Guzolândia</option>
                  <option>Herculândia</option>
                  <option>Holambra</option>
                  <option>Hortolândia</option>
                  <option>Iacanga</option>
                  <option>Iacri</option>
                  <option>Iaras</option>
                  <option>Ibaté</option>
                  <option>Ibirá</option>
                  <option>Ibirarema</option>
                  <option>Ibitinga</option>
                  <option>Ibiúna</option>
                  <option>Icém</option>
                  <option>Iepê</option>
                  <option>Igaraçu do Tietê</option>
                  <option>Igarapava</option>
                  <option>Igaratá</option>
                  <option>Iguape</option>
                  <option>Ilhabela</option>
                  <option>Ilha Comprida</option>
                  <option>Ilha Solteira</option>
                  <option>Indaiatuba</option>
                  <option>Indiana</option>
                  <option>Indiaporã</option>
                  <option>Inúbia Paulista</option>
                  <option>Ipaussu</option>
                  <option>Iperó</option>
                  <option>Ipeúna</option>
                  <option>Ipiguá</option>
                  <option>Iporanga</option>
                  <option>Ipuã</option>
                  <option>Iracemápolis</option>
                  <option>Irapuã</option>
                  <option>Irapuru</option>
                  <option>Itaberá</option>
                  <option>Itaí</option>
                  <option>Itajobi</option>
                  <option>Itaju</option>
                  <option>Itanhaém</option>
                  <option>Itaóca</option>
                  <option>Itapecerica da Serra</option>
                  <option>Itapetininga</option>
                  <option>Itapeva</option>
                  <option>Itapevi</option>
                  <option>Itapira</option>
                  <option>Itapirapuã Paulista</option>
                  <option>Itápolis</option>
                  <option>Itaporanga</option>
                  <option>Itapuí</option>
                  <option>Itapura</option>
                  <option>Itaquaquecetuba</option>
                  <option>Itararé</option>
                  <option>Itariri</option>
                  <option>Itatiba</option>
                  <option>Itatinga</option>
                  <option>Itirapina</option>
                  <option>Itirapuã</option>
                  <option>Itobi</option>
                  <option>Itu</option>
                  <option>Itupeva</option>
                  <option>Ituverava</option>
                  <option>Jaborandi</option>
                  <option>Jaboticabal</option>
                  <option>Jacareí</option>
                  <option>Jaci</option>
                  <option>Jacupiranga</option>
                  <option>Jaguariúna</option>
                  <option>Jales</option>
                  <option>Jambeiro</option>
                  <option>Jandira</option>
                  <option>Jardinópolis</option>
                  <option>Jarinu</option>
                  <option>Jaú</option>
                  <option>Jeriquara</option>
                  <option>Joanópolis</option>
                  <option>João Ramalho</option>
                  <option>José Bonifácio</option>
                  <option>Júlio Mesquita</option>
                  <option>Jumirim</option>
                  <option>Jundiaí</option>
                  <option>Junqueirópolis</option>
                  <option>Juquiá</option>
                  <option>Juquitiba</option>
                  <option>Lagoinha</option>
                  <option>Laranjal Paulista</option>
                  <option>Lavínia</option>
                  <option>Lavrinhas</option>
                  <option>Leme</option>
                  <option>Lençóis Paulista</option>
                  <option>Limeira</option>
                  <option>Lindóia</option>
                  <option>Lins</option>
                  <option>Lorena</option>
                  <option>Lourdes</option>
                  <option>Louveira</option>
                  <option>Lucélia</option>
                  <option>Lucianópolis</option>
                  <option>Luís Antônio</option>
                  <option>Luiziânia</option>
                  <option>Lupércio</option>
                  <option>Lutécia</option>
                  <option>Macatuba</option>
                  <option>Macaubal</option>
                  <option>Macedônia</option>
                  <option>Magda</option>
                  <option>Mairinque</option>
                  <option>Mairiporã</option>
                  <option>Manduri</option>
                  <option>Marabá Paulista</option>
                  <option>Maracaí</option>
                  <option>Marapoama</option>
                  <option>Mariápolis</option>
                  <option>Marília</option>
                  <option>Marinópolis</option>
                  <option>Martinópolis</option>
                  <option>Matão</option>
                  <option>Mauá</option>
                  <option>Mendonça</option>
                  <option>Meridiano</option>
                  <option>Mesópolis</option>
                  <option>Miguelópolis</option>
                  <option>Mineiros do Tietê</option>
                  <option>Miracatu</option>
                  <option>Mira Estrela</option>
                  <option>Mirandópolis</option>
                  <option>Mirante do Paranapanema</option>
                  <option>Mirassol</option>
                  <option>Mirassolândia</option>
                  <option>Mococa</option>
                  <option>Moji Das Cruzes</option>
                  <option>Mogi Guaçu</option>
                  <option>Moji-mirim</option>
                  <option>Mombuca</option>
                  <option>Monções</option>
                  <option>Mongaguá</option>
                  <option>Monte Alegre do Sul</option>
                  <option>Monte Alto</option>
                  <option>Monte Aprazível</option>
                  <option>Monte Azul Paulista</option>
                  <option>Monte Castelo</option>
                  <option>Monteiro Lobato</option>
                  <option>Monte Mor</option>
                  <option>Morro Agudo</option>
                  <option>Morungaba</option>
                  <option>Motuca</option>
                  <option>Murutinga do Sul</option>
                  <option>Nantes</option>
                  <option>Narandiba</option>
                  <option>Natividade da Serra</option>
                  <option>Nazaré Paulista</option>
                  <option>Neves Paulista</option>
                  <option>Nhandeara</option>
                  <option>Nipoã</option>
                  <option>Nova Aliança</option>
                  <option>Nova Campina</option>
                  <option>Nova Canaã Paulista</option>
                  <option>Nova Castilho</option>
                  <option>Nova Europa</option>
                  <option>Nova Granada</option>
                  <option>Nova Guataporanga</option>
                  <option>Nova Independência</option>
                  <option>Novais</option>
                  <option>Nova Luzitânia</option>
                  <option>Nova Odessa</option>
                  <option>Novo Horizonte</option>
                  <option>Nuporanga</option>
                  <option>Ocauçu</option>
                  <option>Óleo</option>
                  <option>Olímpia</option>
                  <option>Onda Verde</option>
                  <option>Oriente</option>
                  <option>Orindiúva</option>
                  <option>Orlândia</option>
                  <option>Osasco</option>
                  <option>Oscar Bressane</option>
                  <option>Osvaldo Cruz</option>
                  <option>Ourinhos</option>
                  <option>Ouroeste</option>
                  <option>Ouro Verde</option>
                  <option>Pacaembu</option>
                  <option>Palestina</option>
                  <option>Palmares Paulista</option>
                  <option>Palmeira D'oeste</option>
                  <option>Palmital</option>
                  <option>Panorama</option>
                  <option>Paraguaçu Paulista</option>
                  <option>Paraibuna</option>
                  <option>Paraíso</option>
                  <option>Paranapanema</option>
                  <option>Paranapuã</option>
                  <option>Parapuã</option>
                  <option>Pardinho</option>
                  <option>Pariquera-açu</option>
                  <option>Parisi</option>
                  <option>Patrocínio Paulista</option>
                  <option>Paulicéia</option>
                  <option>Paulínia</option>
                  <option>Paulistânia</option>
                  <option>Paulo de Faria</option>
                  <option>Pederneiras</option>
                  <option>Pedra Bela</option>
                  <option>Pedranópolis</option>
                  <option>Pedregulho</option>
                  <option>Pedreira</option>
                  <option>Pedrinhas Paulista</option>
                  <option>Pedro de Toledo</option>
                  <option>Penápolis</option>
                  <option>Pereira Barreto</option>
                  <option>Pereiras</option>
                  <option>Peruíbe</option>
                  <option>Piacatu</option>
                  <option>Piedade</option>
                  <option>Pilar do Sul</option>
                  <option>Pindamonhangaba</option>
                  <option>Pindorama</option>
                  <option>Pinhalzinho</option>
                  <option>Piquerobi</option>
                  <option>Piquete</option>
                  <option>Piracaia</option>
                  <option>Piracicaba</option>
                  <option>Piraju</option>
                  <option>Pirajuí</option>
                  <option>Pirangi</option>
                  <option>Pirapora do Bom Jesus</option>
                  <option>Pirapozinho</option>
                  <option>Pirassununga</option>
                  <option>Piratininga</option>
                  <option>Pitangueiras</option>
                  <option>Planalto</option>
                  <option>Platina</option>
                  <option>Poá</option>
                  <option>Poloni</option>
                  <option>Pompéia</option>
                  <option>Pongaí</option>
                  <option>Pontal</option>
                  <option>Pontalinda</option>
                  <option>Pontes Gestal</option>
                  <option>Populina</option>
                  <option>Porangaba</option>
                  <option>Porto Feliz</option>
                  <option>Porto Ferreira</option>
                  <option>Potim</option>
                  <option>Potirendaba</option>
                  <option>Pracinha</option>
                  <option>Pradópolis</option>
                  <option>Praia Grande</option>
                  <option>Pratânia</option>
                  <option>Presidente Alves</option>
                  <option>Presidente Bernardes</option>
                  <option>Presidente Epitácio</option>
                  <option>Presidente Prudente</option>
                  <option>Presidente Venceslau</option>
                  <option>Promissão</option>
                  <option>Quadra</option>
                  <option>Quatá</option>
                  <option>Queiroz</option>
                  <option>Queluz</option>
                  <option>Quintana</option>
                  <option>Rafard</option>
                  <option>Rancharia</option>
                  <option>Redenção da Serra</option>
                  <option>Regente Feijó</option>
                  <option>Reginópolis</option>
                  <option>Registro</option>
                  <option>Restinga</option>
                  <option>Ribeira</option>
                  <option>Ribeirão Bonito</option>
                  <option>Ribeirão Branco</option>
                  <option>Ribeirão Corrente</option>
                  <option>Ribeirão do Sul</option>
                  <option>Ribeirão Dos Índios</option>
                  <option>Ribeirão Grande</option>
                  <option>Ribeirão Pires</option>
                  <option>Ribeirão Preto</option>
                  <option>Riversul</option>
                  <option>Rifaina</option>
                  <option>Rincão</option>
                  <option>Rinópolis</option>
                  <option>Rio Claro</option>
                  <option>Rio Das Pedras</option>
                  <option>Rio Grande da Serra</option>
                  <option>Riolândia</option>
                  <option>Rosana</option>
                  <option>Roseira</option>
                  <option>Rubiácea</option>
                  <option>Rubinéia</option>
                  <option>Sabino</option>
                  <option>Sagres</option>
                  <option>Sales</option>
                  <option>Sales Oliveira</option>
                  <option>Salesópolis</option>
                  <option>Salmourão</option>
                  <option>Saltinho</option>
                  <option>Salto</option>
                  <option>Salto de Pirapora</option>
                  <option>Salto Grande</option>
                  <option>Sandovalina</option>
                  <option>Santa Adélia</option>
                  <option>Santa Albertina</option>
                  <option>Santa Bárbara D'oeste</option>
                  <option>Santa Branca</option>
                  <option>Santa Clara D'oeste</option>
                  <option>Santa Cruz da Conceição</option>
                  <option>Santa Cruz da Esperança</option>
                  <option>Santa Cruz Das Palmeiras</option>
                  <option>Santa Cruz do Rio Pardo</option>
                  <option>Santa Ernestina</option>
                  <option>Santa fé do Sul</option>
                  <option>Santa Gertrudes</option>
                  <option>Santa Isabel</option>
                  <option>Santa Lúcia</option>
                  <option>Santa Maria da Serra</option>
                  <option>Santa Mercedes</option>
                  <option>Santana da Ponte Pensa</option>
                  <option>Santana de Parnaíba</option>
                  <option>Santa Rita D'oeste</option>
                  <option>Santa Rita do Passa Quatro</option>
                  <option>Santa Rosa de Viterbo</option>
                  <option>Santa Salete</option>
                  <option>Santo Anastácio</option>
                  <option>Santo André</option>
                  <option>Santo Antônio da Alegria</option>
                  <option>Santo Antônio de Posse</option>
                  <option>Santo Antônio do Aracanguá</option>
                  <option>Santo Antônio do Jardim</option>
                  <option>Santo Antônio do Pinhal</option>
                  <option>Santo Expedito</option>
                  <option>Santópolis do Aguapeí</option>
                  <option>Santos</option>
                  <option>São Bento do Sapucaí</option>
                  <option>São Bernardo do Campo</option>
                  <option>São Caetano do Sul</option>
                  <option>São Carlos</option>
                  <option>São Francisco</option>
                  <option>São João da Boa Vista</option>
                  <option>São João Das Duas Pontes</option>
                  <option>São João de Iracema</option>
                  <option>São João do Pau D'alho</option>
                  <option>São Joaquim da Barra</option>
                  <option>São José da Bela Vista</option>
                  <option>São José do Barreiro</option>
                  <option>São José do Rio Pardo</option>
                  <option>São José do Rio Preto</option>
                  <option>São José Dos Campos</option>
                  <option>São Lourenço da Serra</option>
                  <option>São Luís do Paraitinga</option>
                  <option>São Manuel</option>
                  <option>São Miguel Arcanjo</option>
                  <option>São Paulo</option>
                  <option>São Pedro</option>
                  <option>São Pedro do Turvo</option>
                  <option>São Roque</option>
                  <option>São Sebastião</option>
                  <option>São Sebastião da Grama</option>
                  <option>São Simão</option>
                  <option>São Vicente</option>
                  <option>Sarapuí</option>
                  <option>Sarutaiá</option>
                  <option>Sebastianópolis do Sul</option>
                  <option>Serra Azul</option>
                  <option>Serrana</option>
                  <option>Serra Negra</option>
                  <option>Sertãozinho</option>
                  <option>Sete Barras</option>
                  <option>Severínia</option>
                  <option>Silveiras</option>
                  <option>Socorro</option>
                  <option>Sorocaba</option>
                  <option>Sud Mennucci</option>
                  <option>Sumaré</option>
                  <option>Suzano</option>
                  <option>Suzanápolis</option>
                  <option>Tabapuã</option>
                  <option>Tabatinga</option>
                  <option>Taboão da Serra</option>
                  <option>Taciba</option>
                  <option>Taguaí</option>
                  <option>Taiaçu</option>
                  <option>Taiúva</option>
                  <option>Tambaú</option>
                  <option>Tanabi</option>
                  <option>Tapiraí</option>
                  <option>Tapiratiba</option>
                  <option>Taquaral</option>
                  <option>Taquaritinga</option>
                  <option>Taquarituba</option>
                  <option>Taquarivaí</option>
                  <option>Tarabai</option>
                  <option>Tarumã</option>
                  <option>Tatuí</option>
                  <option>Taubaté</option>
                  <option>Tejupá</option>
                  <option>Teodoro Sampaio</option>
                  <option>Terra Roxa</option>
                  <option>Tietê</option>
                  <option>Timburi</option>
                  <option>Torre de Pedra</option>
                  <option>Torrinha</option>
                  <option>Trabiju</option>
                  <option>Tremembé</option>
                  <option>Três Fronteiras</option>
                  <option>Tuiuti</option>
                  <option>Tupã</option>
                  <option>Tupi Paulista</option>
                  <option>Turiúba</option>
                  <option>Turmalina</option>
                  <option>Ubarana</option>
                  <option>Ubatuba</option>
                  <option>Ubirajara</option>
                  <option>Uchoa</option>
                  <option>União Paulista</option>
                  <option>Urânia</option>
                  <option>Uru</option>
                  <option>Urupês</option>
                  <option>Valentim Gentil</option>
                  <option>Valinhos</option>
                  <option>Valparaíso</option>
                  <option>Vargem</option>
                  <option>Vargem Grande do Sul</option>
                  <option>Vargem Grande Paulista</option>
                  <option>Várzea Paulista</option>
                  <option>Vera Cruz</option>
                  <option>Vinhedo</option>
                  <option>Viradouro</option>
                  <option>Vista Alegre do Alto</option>
                  <option>Vitória Brasil</option>
                  <option>Votorantim</option>
                  <option>Votuporanga</option>
                  <option>Zacarias</option>
                  <option>Chavantes</option>
                  <option>Estiva Gerbi</option>
              </select>
            </div>
            <br/>
            <div style="width: 100%">
              <label class="user form-check-label" for="NM_Mesa">Resumo da Mesa</label>
              <textarea class="form-control" id="Resumo_Mesa" rows="3"></textarea>
            </div>
            <br />
            <div style="width: 100%">
              Presencial: <input type="checkbox" id="SN_Presencial" />
            </div>
            <div style="display: flex;">
              <input
                class="form-control"
                style="
                  flex: 1;
                  width: 50%;
                  margin-left: 0;
                  margin-right: auto;
                  visibility: hidden;
                "
                type="submit"
                value="Cadastrar"
              />
              <input
                class="btn"
                style="flex: 1; width: 50%; margin-left: 0; margin-right: auto; background-color:#457b9d; color:#fff;"
                type="submit"
                value="Cadastrar"
              />
            </div>
          </form>
        </p>
      </div>
    </div>
    <footer>
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
    </footer>
  </body>
</html>
