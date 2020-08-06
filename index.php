<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- Estilo de Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>ADA - Cursos Online</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body id="top" class="page" role="document">
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
                            <a href="sobre.php" class="nav-link" aria-label="Botão Sobre" tabindex="0">Sobre</a>
                        </li>

                        <li class="nav-item divisor"></li>

                        <li class="nav-item btn-entrar">
                            <a href="login.php" class="nav-link" aria-label="Botão Entrar" tabindex="0">Entrar</a>
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

    <section id="home">
        <!--Início Secão Home -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <!--Incio Textos da Seção-->
                    <div class="align-self-center" id="conteudo" tabindex="0">
                        <h1>A maior plataforma de cursos nacionais</h1>
                        <p>Mais de 1000 cursos de diversas áreas para ajudar no seu crescimento profissional
                        </p>
                        <label for="form-email" id="lbl-email" class="visuallyhidden">Formulário de Inscrição através do e-mail</label>
                    </div>
                </div>
                <!-- Fim Textos da Seção-->
                <div class="col-md-6 d-none d-md-block">
                    <div class="figure-box">
                        <figure>
                        <img class="on-contrast-force-gray" src="img/mulher.png" aria-label="Duas mulheres sorrindo e de braços cruzados, olhando pra frente. Estão de costas uma para outra" width="426">
                        <figcaption><p>Duas mulheres sorrindo</p></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Fim Secão Home -->

    <section class="caixa" id="serviços">
        <!--Inicio da Seção Serviços-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block figure-box">
                    <div class="row cursos">
                        <div class="col-md-6">
                            <figure>
                            <img src="img/img1.jpg" class="img-fluid on-contrast-force-gray" aria-label="Desenho de uma vídeo-aula com professor apontando para o quadro">
                            <figcaption><p>Desenho de uma vídeo-aula</p></figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="img/img3.jpg" class="img-fluid on-contrast-force-gray" aria-label="Desenho de uma mulher ministrando aula online para um jovem">
                                <figcaption><p>Desenho de uma mulher ministrando aula online</p></figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="row cursos">
                        <div class="col-md-6 d-none d-md-block">
                            <figure>
                                <img src="img/praticidade.jpg" class="img-fluid on-contrast-force-gray" aria-label="Desenho de um homem ministrando aula através de um notebook">
                                <figcaption><p>Desenho de um homem ministrando aula</p></figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="img/img4.jpg" class="img-fluid on-contrast-force-gray" aria-label="Desenho de um homem apontando para gráficos em uma tela de computador">
                                <figcaption><p>Desenho de um homem apontando para gráficos</p></figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" tabindex="0">
                    <h2>Como funciona?</h2>

                    <h3>Cursos</h3>
                    <p>
                    Você tem a liberdade de aprender uma nova especialidade com nossos cursos mais variados, a qualquer hora e em qualquer lugar, com preços acessíveis e alguns até mesmo grátis não perca tempo de rechear seu currículo com garantia de satisfação.
                    </p>

                    <h3>Instrutores</h3>
                    <p>
                    Aprenda com pessoas dispostas a ensinar com credibilidade, ou seja você mesmo um instrutor e ganhe com isso, além de fazer os cursos você pode tirar suas dúvidas diretamente com os instrutores.
                    </p>

                    <h3>Promoções</h3>
                    <p>
                    A cada semana uma categoria aleatória de cursos recebe um desconto especial não perca sua oportunidade de economizar enquanto aprende.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Fim da Seção Serviços-->

    <section class="caixa" id="saiba-mais">
        <!--Inicio Seção Saiba Mais-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center" tabindex="0">
                        <h2>Saiba mais sobre nós</h2>
                        <p>
                        A ADA cursos online foi criada a partir da ideia de que o conhecimento move o mundo, todos tem algo para ensinar e principalmente algo que desejam aprender. Essa plataforma foi criada para que qualquer pessoa tenha acesso ao conhecimento. Por isso trabalhamos para que você tenha o total controle do seu sucesso e conhecimento, somos ADA, somos aqueles que se importam com o conhecimento.
                        </p>
                        <a id="btn-veja-mais" href="./sobre.php" class="btn btn-light" aria-label="Botão de Veja Mais" tabindex="0">Veja mais</a>
                    </div>
                </div>
                <div class="col-md-6 figure-box">
                    <figure>
                        <img src="img/saiba.png" class="img-fluid on-contrast-force-gray" aria-label="Desenho de um painel minimalista">
                        <figcaption><p>Desenho de um painel minimalista</p></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--Fim Seção Saiba Mais-->

    <section class="caixa recursos" id="recursos">
        <!--Inicio Seção Recursos-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 figure-box" tabindex="0">
                    <figure>
                        <img src="img/organizacao.png" class="img-fluid on-contrast-force-gray" aria-label="Desenho de uma mulher ao lado de um celular com um calendário">
                        <figcaption><p>Desenho de uma mulehr ao lado de um celular</p></figcaption>
                    </figure>
                    <h2>Organização</h2>
                    <p>
                    Você é o dono de sua rotina de estudos escolha seu tempo determinado ou assista seus cursos quando desejar. Faça sua própria rotina de estudos.
                    </p>
                </div>


                <div class="col-md-4 figure-box" tabindex="0">
                    <figure>
                        <img src="img/img2.jpg" class="img-fluid on-contrast-force-gray" aria-label="Desenho de uma mulher falando na tela de um computador">
                        <figcaption><p>Desenho de uma mulher em um computador</p></figcaption>
                    </figure>
                    <h2>Praticidade</h2>
                    <p>
                    Em casa, no notebook, tablet ou celular, você tem total acesso às funcionalidades da plataforma, aprenda onde e quando quiser. Sem fronteiras, aqui sua vontade de aprender tem respaldo.
                    </p>
                </div>

                <div class="col-md-4 figure-box" tabindex="0">
                    <figure>
                        <img src="img/suporte.png" class="img-fluid on-contrast-force-gray" aria-label="Desenho de uma mulher trabalhando no suporte técnico">
                        <figcaption><p>Desenho de uma mulher no suporte técnico</p></figcaption>
                    </figure>
                    <h2>Suporte Técnico</h2>
                    <p>
                    Estamos preucupados com sua experiência e seu conforto, por isso alem de tirar sua duvidas sobre os cursos com os instrutores você pode relatar as dificuldades coma plataforma ou algum problema ocorrido diretamente com nossa central 24h
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--Fim Seção Recursos-->

    <footer>
        <div class="container">
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
    <script src="js/aumentar-font.js"></script>
</body>

</html>