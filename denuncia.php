
<?php

include('verificaLogin.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/dengue.svg" type="image/x-icon">
    <link rel="icon" href="img/dengue.svg" type="image/x-icon">
    <title>Zer@Dengue - Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <header>
            <div class="navbar container">
                <div class="imgNavbar">
                    <img src="img/dengue.svg" alt="ZeroDengue">
                </div>

                <div class="logOut">
                    <a href="/zerodengue/logout.php">Sair</a>
                </div>
            </div>
        </header>

        <section class="content">
            <div class="container">
                <div class="botoesContent col-12 d-flex flex-wrap justify-content-end">
                    <div class="adicionarDenuncia col-lg-2 col-sm-12">
                        <a href="/zerodengue/dashboard.php">Voltar</a>
                    </div>
                </div>

                <hr>

                <div class="conteudos col-12">

                <div class="boxUsuario">
                    <h2>Registrar Denúncia</h2>
                </div>
                    <h2 class="mb-3 small text-center">Para registrar uma denúncia preencha os campos abaixo:</h2>


                    <?php 
                            
                            if(isset($_SESSION['denuncia_nao_realizada'])):

                            ?>

                            <div class="notification bg-danger text-white">Erro ao registrar denuncia!</div>

                            <?php
                            endif;
                            unset($_SESSION['denuncia_nao_realizada']);
                            ?>

                            <!-- Sucesso -->

                            <?php 
                            
                            if(isset($_SESSION['denuncia_realizada'])):
                            ?>

                            <div class="notification bg-success text-white">Denuncia registrada com sucesso!</div>                            

                            <?php
                            endif;
                            unset($_SESSION['denuncia_realizada']);
                            ?>

                    <div class="formGroup">
                        <form action="/zerodengue/enviaDenuncia.php" method="post" enctype="multipart/form-data">


                            <div class="formInput">
                                <input type="estado" name="estado" placeholder="Estado" />
                            </div>

                            <div class="formInput">
                                <input type="cidade" name="cidade" placeholder="Cidade" />
                            </div>

                            <div class="formInput">
                                <input type="endereco" name="endereco" placeholder="Endereço" />
                            </div>

                            <div class="formInput">
                                <input type="bairro" name="bairro" placeholder="Bairro" />
                            </div>

                            <div class="formInput">
                                <input type="number" name="numero" placeholder="Número" />
                            </div>

                            <div class="formInput">
                                <label for="file" class="d-flex justify-content-between align-items-center w-100">Foto do local:
                                <input class="w-70" id="file" type="file" name="fotoLocal"/>
                                </label>
                            </div>
                            
                            
                        <div class="formBotao"  >
                            <button type="submit" 
                                    onclick="alert('Muito Obrigado Pela sua Denuncia!!')"
                                    >Denunciar</button>
                        </div>
                        </form>
                </div>

            </div>
        </section>

        <footer>
            <div class="container">
                <div class="footerContent">
                    <span>Copyright 2020 - Zer@Dengue. Todos os direitos reservados.</span> <br>
                    <span>Desenvolvido por Emerson Brambila e Matheus Peixe - Unopar | Análise e Desenvolvimento de
                        Sistemas 4º Semestre</span>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>