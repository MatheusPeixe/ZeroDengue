<?php 
    session_start();
    ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/dengue.svg" type="image/x-icon">
    <link rel="icon" href="img/dengue.svg" type="image/x-icon">
    <title>Zer@Dengue - Cadastrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="main">
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
                    <div class="formHeader">
                        <h3>Novo Cadastro</h3>
                    </div>

                    <div class="formGroup">
                            <?php 
                            
                            if(isset($_SESSION['cadastro_existente'])):

                            ?>

                            <div class="notification bg-warning text-white">Usuário já cadastrado!</div>

                            <?php
                            endif;
                            unset($_SESSION['cadastro_existente']);
                            ?>

                            <!-- Sucesso -->

                            <?php 
                            
                            if(isset($_SESSION['cadastro_realizado'])):
                            ?>

                            <div class="notification bg-success text-white">Cadastro Realizado com sucesso!</div>                            

                            <?php
                            endif;
                            unset($_SESSION['cadastro_realizado']);
                            ?>


                        <form action="/zerodengue/registrar.php" method="post">
                            <div class="formInput">
                                <input type="text" name="nomeCompleto" placeholder="Nome Completo" required />
                            </div>

                            <div class="formInput">
                                <input type="email" name="email" placeholder="E-mail" required />
                            </div>

                            <div class="formInput">
                                <input type="rg" name="rg" placeholder="RG" required />
                            </div>

                            <div class="formInput">
                                <input type="cpf" name="cpf" placeholder="CPF" required />
                            </div>

                            <div class="formInput">
                                <input type="estado" name="estado" placeholder="Estado" required />
                            </div>

                            <div class="formInput">
                                <input type="cidade" name="cidade" placeholder="Cidade" required />
                            </div>

                            <div class="formInput">
                                <input type="endereco" name="endereco" placeholder="Endereço" required />
                            </div>

                            <div class="formInput">
                                <input type="bairro" name="bairro" placeholder="Bairro" required />
                            </div>

                            <div class="formInput">
                                <input type="numero" name="numero" placeholder="Número" required />
                            </div>

                            <div class="formInput">
                                <input type="tel" name="telefone" placeholder="Telefone" required />
                            </div>

                            <div class="formInput">
                                <input type="tel" name="usuario" placeholder="Usuário" required />
                            </div>

                            <div class="formInput">
                                <input type="password" name="senha" placeholder="Senha" required />
                            </div>
                                    
                        <div class="formBotao">
                            <button type="submit">Cadastrar</button>
                        </div>
                        </form>

                        <a href="/zerodengue" class="text-center mt-3">já possui conta?</a>
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