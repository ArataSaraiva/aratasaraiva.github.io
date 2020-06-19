<?php
ob_start();
session_start();
if (isset($_SESSION['usuario']) && (isset($_SESSION['senha']))) {
    header("Location: admin/painel.php");
}
    include("conexao.php");

    if (isset($_POST['entrar'])) {
        $usuario = trim(strip_tags($_POST['usuario']));
        $senha = trim(strip_tags($_POST['senha']));

        $select = "SELECT * from tb_usuarios WHERE usuario=:usuario AND senha=:senha";
        try{
            $result = $conexao->prepare($select);
            $result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $result->bindParam(':senha', $senha, PDO::PARAM_STR);
            $result->execute();
            $contar = $result->rowCount();
            if ($contar>0) {
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
                //echo "Logado com sucesso!";
                echo '<div class="alert alert-success" role="alert"> <strong>Logado </strong> com sucesso!</div>';

                header("Refresh: 1, admin/painel.php?acao=logado");
            }else{
                echo '<div class="alert alert-warning" role="alert"> Usuario ou senha iválidos</div>';
            }
        }catch(PDOException $e){
            echo $e;
        }
    }



?>

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

    <title>ADA - Cursos Online</title>
    <link rel="icon" href="img/favicon.png">
</head>

<body id="page-login">

    <header>
        <!-- Inicio Cabecalho -->
        <a href="#sec-login" class="visuallyhidden" tabindex="0">Ir direto para o conteúdo</a>
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
                            <a href=#" class="nav-link" aria-label="Botão Cursos" tabindex="0">Cursos</a>
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

    <section id="sec-login">
        <div id="div-login">
            <div class="login-switch">
                <div class="user signinBx">
                    <div class="imgBx"><img src="img/inscricao.jpg" alt=""></div>
                    <div class="formBx">
                        <form method="POST" action="#.php" enctype="multipart/form-data">
                            <h2 tabindex="-1">Entrar</h2>
                            <input tabindex="0" type="text" name="usuario" placeholder="Usuário" aria-label="Insira seu usuário" required>
                            <input tabindex="0" type="password" name="senha" placeholder="Senha" aria-label="Insira sua senha" required>
                            <input tabindex="0" type="submit" name="entrar" aria-label="Botão entrar" value="Entrar">
                            <p class="signup">Não tem uma conta? <a href="#" onclick="toggleForm();" tabindex="0">Inscreva-se</a></p>
                        </form>
                    </div>
                </div>
<?php 

    if (isset($_POST['cadastrar'])) {
        $cad_usuario = trim(strip_tags($_POST['cad_usuario']));
        $cad_email = trim(strip_tags($_POST['cad_email']));
        $cad_senha = trim(strip_tags($_POST['cad_senha']));
        $cad_confirma_senha = trim(strip_tags($_POST['cad_confirma_senha']));

        if ($cad_senha != $cad_confirma_senha) {
            echo '<div class="alert alert-danger" role="alert">As senhas não são iguais, tente novamente</div>';
        }else {
            $insert = "INSERT into tb_usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha)";
            try{
                $result = $conexao->prepare($insert);
                $result->bindParam(':usuario', $cad_usuario, PDO::PARAM_STR);
                $result->bindParam(':email', $cad_email, PDO::PARAM_STR);
                $result->bindParam(':senha', $cad_senha, PDO::PARAM_STR);

                $result->execute();
                $contar = $result->rowCount();
                if ($contar>0) {
                                    //echo "Inserido com sucesso!";
                    echo '<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso!</div>';
                }else{
                    echo '<div class="alert alert-success" role="alert">Erro ao cadastrar usuario!</div>';
                }
            }catch(PDOException $e){
                echo $e;
            }
        }        
    }

 ?>
                <div class="user signupBx">
                    <div class="formBx">
                        <form method="post" role="form">
                            <h2>Crie uma Conta</h2>
                            <input tabindex="0" type="text" name="cad_usuario" placeholder="Digite o nome de usuario" required>
                            <input tabindex="0" type="email" name="cad_email" placeholder="Digite o nome do email" required>
                            <input tabindex="0" type="password" name="cad_senha" placeholder="Digite uma senha" required>
                            <input tabindex="0" type="password" name="cad_confirma_senha" placeholder="Confime a senha" required>
                            <input tabindex="0" type="submit" name="cadastrar" value="Cadastrar">
                            <p class="signup">Já tem uma conta? <a tabindex="0" href="#" onclick="toggleForm();">Entrar</a></p>
                        </form>
                    </div>
                    <div class="imgBx"><img src="img/inscricao.jpg" alt=""></div>
                </div>

            </div>
        </div>
    </section>

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
    <script type="text/javascript" src="js/text.js"></script>
</body>

</html>