<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/dengue.svg" type="image/x-icon">
    <link rel="icon" href="img/dengue.svg" type="image/x-icon">
    <title>Zer@Dengue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="main d-flex justify-content-center align-items-center flex-column">
        <section class="cadastro col-sm-12 col-md-12 col-lg-4 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="header">
                    <div class="imgHeader">
                        <img src="img/dengue.svg" alt="ZeroDengue">
                    </div>

                    <div class="nameHeader">
                    <h1>Zer@Dengue</h1>
                    </div>
                </div>

                <div class="formContent">

                    <?php 
                    
                    if(isset($_SESSION['nao_autenticado'])):

                    ?>

                    <div class="notification bg-danger">
                        <p>Usuário ou senha inválidos.</p>
                    </div>

                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <div class="formGroup">
                        <form action="/zerodengue/login.php" method="post">
                            <div class="formInput">
                                <input type="text" name="usuario" placeholder="Usuário" />
                            </div>

                            <div class="formInput">
                                <input type="password" name="senha" placeholder="Senha" />
                            </div>     
                            
                            <div class="formBotao">
                            <button type="submit">Acessar</button>
                        </div>
                        </form>

                        <a href="/zerodengue/cadastro.php" class="text-center mt-3">Criar Conta</a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="footerContent">
                    <span>Copyright 2020 - Zer@Dengue. Todos os direitos reservados.</span> <br>
                    <span>Desenvolvido por Emerson Brambila e Matheus Peixe - Unopar | Análise e Desenvolvimento de Sistemas 4º Semestre</span>
                </div>
            </div>
        </footer>
    </div>

</body>
</html>