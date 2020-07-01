
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
                    <h2>Acompanhar Denúncia</h2>
                </div>
                    <h2 class="mb-3 small text-center">Acompanhe suas denúncias abaixo:</h2>

                    <div class="denunciaBox mb-3">
                        <div class="contentDenuncia">
                            <table class="table">
                                
                                <thead > 
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Informações</th>
                                            <th scope="clo1">Endereço</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                </thead>
                                
                                <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Local avaliado</td>
                                            <td>Av. Brasília - Jardim Taroba, Cambé - PR</td>
                                            <td>Em Análise</td>
                                        </tr>
                                </tbody>

                                <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Local avaliado</td>
                                            <td>R. Pôrto Alegre, 247-Vila Mesquita, Cambé-PR</td>
                                            <td>Aprovado</td>
                                        </tr>
                                </tbody>

                                <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Local em Análise</td>
                                            <td>R. João Peres Navarro, Cambé - PR</td>
                                            <td>Em Análise</td>
                                        </tr>
                                </tbody>
                            </table>

                        </div>
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