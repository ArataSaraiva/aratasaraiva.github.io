<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- Estilo de Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>Sobre</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body class="bd-sobre">

    <header>
        <!-- Inicio Cabecalho -->
        <a href="#conteudo" class="visuallyhidden" tabindex="0">Ir direto para o conteúdo</a>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <a href="./index.php" class="navbar-brand"><img src="img/logo.png" width="142" tabindex="0" aria-label="Logotipo ADA"></a>
                    </div>
                </div>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal" aria-label="Botão de Alternância em telas menores">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link" aria-label="Botão de Página Incial" tabindex="0">Início</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="Botão Cursos" tabindex="0">Cursos</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-label="Botão Instrutor" tabindex="0">Instrutor</a>
                        </li>

                        <li class="nav-item">
                            <a href="./sobre.php" class="nav-link" aria-label="Botão Sobre" tabindex="0">Sobre</a>
                        </li>

                        <li class="nav-item divisor"></li>

                        <li class="nav-item btn-entrar">
                            <a href="./login.php" class="nav-link" aria-label="Botão Entrar" tabindex="0">Entrar</a>
                        </li>

                        <li class="nav-item icone-acessibilidade">
                            <div class="adjust-align-center">
                                <a href="#" id="altocontraste" onclick="window.toggleContrast()" tabindex="0"><img src="img/adjust.png" aria-label="Botão de alto contraste" width="23"></a>
                            </div>
                        </li>

                        <li class="nav-item icone-acessibilidade">
                            <div class="adjust-align-center">
                                <a href="#" id="aumentar-fonte" onclick="window.toggleFont()" tabindex="0"><img src="img/font.png" aria-label="Botão com função de aumentar a fonte" width="23"></a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!--/Fim Cabecalho -->

    <section class="section-sobre" id="conteudo">
        <!-- Container: Aquele que alinha os card no centro -->
        <div class="sobre">


            <!-- Card: Responsável por agrupar as duas faces -->
            <div class="card">
                <!-- Face: Dita o tamanho padrão para face. -->
                <!-- Face1: Será aquela que irá descer no eixo Y. Ao utilizar o hover, ela voltará ao seu local original -->
                <div class="face face1">
                    <div class="content">
                        <img src="img/mission.png" aria-label="ícone de uma montanha com uma bandeira no topo, simbolizando uma missão cumprida">
                        <h3 tabindex="0">Missão</h3>
                    </div>
                </div>
                <!-- Face: Dita o tamanho padrão para face. -->
                <!-- Face2: Será aquela que irá subir no eixo Y. Ao utilizar o hover, ela voltará ao seu local original -->
                <div class="face face2">
                    <div class="content">
                        <p tabindex="0">Nossa missão é entregar uma plataforma de acesso rápido e fácil ao conhecimento de qualidade com preços acessíveis sem muita burocracia.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="img/vision.png" aria-label="ícone de  um binóculos simbolizando a visão que temos para o futuro">
                        <h3 tabindex="0">Visão</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p tabindex="0">A plataforma é criada com o intuito de ajudar as pessoas que não tem tempo disponivel, mas querem aprender algo novo por hobby ou necessidade.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="img/valors.png" aria-label="ícone de uma balança simbolizando nossos valores morais e éticos">
                        <h3 tabindex="0">Valores</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p tabindex="0">O conhecimento é um direito de todos por isso temos promoções aleatórias e vouchers para aqueles que não tem condições de pagar por alguns cursos no momento.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <footer class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" id="logo">
                    <a href="./index.php" tabindex="-1"><img src="img/logo.png" width="142" aria-label="Logotipo ADA" tabindex="0"></a>
                </div>

                <div class="col-md-2" tabindex="0">
                    <h4>Company</h4>
                    <ul class="navbar-nav">
                        <li><a href="#" aria-label="botão Sobre da aba Company" tabindex="0">Sobre</a></li>
                        <li><a href="#" aria-label="botão Empregos da aba Company" tabindex="0">Empregos</a></li>
                        <li><a href="#" aria-label="botão Instrutores da aba Company" tabindex="0">Instrutores</a></li>
                        <li><a href="#" aria-label="botão Novidades da aba Company" tabindex="0">Novidades</a></li>
                    </ul>
                </div>

                <div class="col-md-2" tabindex="0">
                    <h4>Comunidades</h4>
                    <ul class="navbar-nav">
                        <li><a href="#" aria-label="botão Alunos da aba Comunidades" tabindex="0">Alunos</a></li>
                        <li><a href="#" aria-label="botão Instrutores da aba Comunidades" tabindex="0">Instrutores</a></li>
                        <li><a href="#" aria-label="botão Desenvolvedores da aba Comunidades" tabindex="0">Desenvolvedores</a></li>
                        <li><a href="#" aria-label="botão Apoiadores da aba Comunidades" tabindex="0">Apoiadores</a></li>
                    </ul>
                </div>

                <div class="col-md-2" tabindex="0">
                    <h4>Links Úteis</h4>
                    <ul class="navbar-nav">
                        <li><a href="#" aria-label="botão Ajuda da aba Links úteis" tabindex="0">Ajuda</a></li>
                        <li><a href="#" aria-label="botão Presentes da aba Links úteis" tabindex="0">Presentes</a></li>
                        <li><a href="#" aria-label="botão Tutoriais da aba Links úteis" tabindex="0">Tutoriais</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no facebook"><img src="img/facebook.png" tabindex="0"></a>
                        </li>
                        <li>
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no twitter"><img src="img/twitter.png" tabindex="0"></a>
                        </li>
                        <li>
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no instagram"><img src="img/instagram.png" tabindex="0"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/high-contrast.js"></script>
</body>

</html>