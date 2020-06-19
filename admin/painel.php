 <?php 
 ob_start();
 session_start();
 if (!isset($_SESSION['usuario']) && (!isset($_SESSION['senha']))) {
    header("Location: ../login.php");
}
include("../conexao.php");
include("sair.php");

?>

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
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <!-- Estilo de Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <title>ADA - Cursos Online</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body id="top" class="page" role="document">
    <header>
        <!-- Inicio Cabecalho -->
        <a href="#home-painel" class="visuallyhidden" tabindex="0">Ir direto para o conteúdo</a>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex">
                        <a href="../index.php" class="navbar-brand"><img src="../img/logo.png" width="142" tabindex="0" aria-label="Logotipo ADA"></a>
                    </div>
                </div>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal" aria-label="Botão de Alternância em telas menores">
            <span class="navbar-toggler-icon"></span>
          </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link" aria-label="Botão de Página Incial" tabindex="0">Início</a>
                        </li>

                        <li class="nav-item divisor"></li>


                        <li class="nav-item icone-acessibilidade">
                            <div class="adjust-align-center">
                                <a href="#" id="altocontraste" onclick="window.toggleContrast()" tabindex="0"><img src="https://aratasaraiva.github.io/img/adjust.png" aria-label="Botão de alto contraste" width="23"></a>
                            </div>
                        </li>

                        <li class="nav-item icone-acessibilidade">
                            <div class="adjust-align-center">
                                <a href="#" id="aumentar-fonte" onclick="window.toggleFont()" tabindex="0"><img src="https://aratasaraiva.github.io/img/font.png" aria-label="Botão com função de aumentar a fonte" width="23"></a>
                            </div>
                        </li>


                        <div class="dropdown nav-item">
                          <button class="btn btn-secondary dropdown-toggle" tabindex="0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                              echo $_SESSION['usuario'];
                            ?>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Perfil</a>
                            <a class="dropdown-item" href="?sair">Sair</a>
                          </div>
                        </div>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!--/Fim Cabecalho -->

    <section id="home-painel">
        <!--Início Secão Home -->
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <?php 

                        if (isset($_GET['acao'])) {
                            $acao = $_GET['acao'];
                            if ($acao == 'logado') {
                                echo '<div class="alert alert-success" role="alert"> <strong>Olá, '.$_SESSION['usuario'].'</strong> Seja bem vindo!</div>';
                            }
                        }
                    ?>

                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button tabindex="0" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Curso de Marketing Digital
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="card-group">
                              <div class="card">
                                <!--video-->
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vqdnQqLgGRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9qdHBXcwayo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/quprwHdeAFY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RmEGfm8prJ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button tabindex="0" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Curso Python
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="card-group">
                              <div class="card">
                                <!--video-->
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/S9uPNppGsGo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Mp0vhMDI7fA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VuKvR1J2LQE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/31llNGKWDdo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" id="headingThre">
                          <h5 class="mb-0">
                            <button tabindex="0" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThre" aria-expanded="false" aria-controls="collapseThre">
                              Curso de Hardware
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThre" class="collapse" aria-labelledby="headingThre" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="card-group">
                              <div class="card">
                                <!--video-->
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zpK_MqEMgu4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kYkOwbzzzxk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vs95I5KqBGE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                              <div class="card">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/J0adFq97U_s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    
                </div>
                <!-- Fim Textos da Seção-->
                <div class="col-md-6 d-none d-md-block">
                    
                </div>
            </div>
        </div>
    </section>
    <!--/Fim Secão Home -->
 




    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2" id="logo">
                    <a href="../index.php" tabindex="-1"><img src="../img/logo.png" width="142" aria-label="Logotipo ADA" tabindex="0"></a>
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
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no facebook"><img src="../img/facebook.png" tabindex="0"></a>
                        </li>
                        <li>
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no twitter"><img src="../img/twitter.png" tabindex="0"></a>
                        </li>
                        <li>
                            <a href="#" tabindex="-1" aria-label="Link para nossa página no instagram"><img src="../img/instagram.png" tabindex="0"></a>
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