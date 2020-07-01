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
                <div class="boxUsuario">
                    <h2>Olá, <?php echo $_SESSION['usuario']; ?> Obrigado por ajudar a acabar com a Dengue!</h2>
                </div>

                <div class="botoesContent col-12 d-flex flex-wrap">
                    <div class="adicionarDenuncia col-lg-6 col-sm-12">
                        <a href="/zerodengue/denuncia.php">Registrar Denúncia</a>
                    </div>

                    <div class="acompanharDenuncia col-lg-6 col-sm-12">
                        <a href="/zerodengue/status.php">Acompanhar Denúncia</a>
                    </div>
                </div>

                <hr>

                <div class="conteudos col-12">
                    <h2>Como se prevenir da Dengue, Zika Vírus e Chikungunya</h2>
                    <p>Dengue, Zika Vírus e Chikungunya são três doenças parecidas. Todas são transmitidas pelos mesmos
                        vetores: os mosquitos Aedes Aegypti e o Aedes Albopictus (considerado "primo" do primeiro). Elas
                        possuem sintomas parecidos, mas algumas características podem ajudar a diferenciá-las. Entre
                        essas, a Dengue costuma ser a mais grave. Causa febre, dor no corpo, dor de cabeça, manchas na
                        pele e indisposição, podendo ainda ter algumas manifestações respiratórias e gastrointestinais.
                        Quando o quadro se agrava, a Dengue pode provocar hemorragias e levar a óbito.</p>
                </div>

                <div class="gridNoticias col-12 d-flex flex-wrap">

                    <div class="boxInfo col-sm-12 col-md-6 col-lg-3 d-flex flex-column">
                        <div class="imgBox">
                            <img src="img/garrafa.png" alt="">
                        </div>

                        <div class="boxTitle">
                            <h3>Guardar Garrafas</h3>
                        </div>

                        <div class="boxContent">
                            <p>Lave principalmente por dentro com escova e sabão os utensílios usados para guardar água
                                em casa, como jarras, garrafas, potes, baldes.</p>
                        </div>
                    </div>

                    <div class="boxInfo col-sm-12 col-md-6 col-lg-3 d-flex flex-column">
                        <div class="imgBox">
                            <img src="img/garrafa.png" alt="">
                        </div>

                        <div class="boxTitle">
                            <h3>Guardar Garrafas</h3>
                        </div>

                        <div class="boxContent">
                            <p>Lave principalmente por dentro com escova e sabão os utensílios usados para guardar água
                                em casa, como jarras, garrafas, potes, baldes.</p>
                        </div>
                    </div>

                    <div class="boxInfo col-sm-12 col-md-6 col-lg-3 d-flex flex-column">
                        <div class="imgBox">
                            <img src="img/garrafa.png" alt="">
                        </div>

                        <div class="boxTitle">
                            <h3>Guardar Garrafas</h3>
                        </div>

                        <div class="boxContent">
                            <p>Lave principalmente por dentro com escova e sabão os utensílios usados para guardar água
                                em casa, como jarras, garrafas, potes, baldes.</p>
                        </div>
                    </div>

                    <div class="boxInfo col-sm-12 col-md-6 col-lg-3 d-flex flex-column">
                        <div class="imgBox">
                            <img src="img/garrafa.png" alt="">
                        </div>

                        <div class="boxTitle">
                            <h3>Guardar Garrafas</h3>
                        </div>

                        <div class="boxContent">
                            <p>Lave principalmente por dentro com escova e sabão os utensílios usados para guardar água
                                em casa, como jarras, garrafas, potes, baldes.</p>
                        </div>
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