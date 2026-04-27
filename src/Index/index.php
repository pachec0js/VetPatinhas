<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Home</title>
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../cssIndex/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap link-->
</head>

<body>
    <?php
    include("nav.php");
    ?>

    <!--carrosel de banners informativos-->
    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <!--Carrosel com os banners-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/PosterumCarrossel.png" class="desktop" alt="Banner 1 - Desktop">
                <img src="../img/carrossel1_mobile.png" class="mobile" alt="Banner 1 - Mobile">
            </div>
            <div class="carousel-item">
                <img src="../img/PosterdoisCarrosel.png" class="desktop" alt="Banner 2 - Desktop">
                <img src="../img/carrossel2_mobile.png" class="mobile" alt="Banner 2 - Mobile">
            </div>
            <div class="carousel-item">
                <img src="../img/PostertresCarrosel.png" class="desktop" alt="Banner 3 - Desktop">
                <img src="../img/carrossel3_mobile.png" class="mobile" alt="Banner 3 - Mobile">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <p class="titulo-servicos">Nossos serviços</p>

    <!--cards de serviços-->
    <div class="cards">
        <div class="card">
            <a href="agendamento.php" class="link_servicos">
                <div class="icon">
                    <i class="bi bi-clipboard-heart-fill"></i>
                </div>
                <div class="title">Consultas</div>
                <div class="descricao-card">
                    Agende suas consultas médicas regularmente para acompanhar sua saúde e prevenir doenças. Cuidar de
                    você é essencial!
                </div>
            </a>
        </div>
        <div class="card">
            <a href="agendamento.php" class="link_servicos">
                <div class="icon">
                    <i class="bi bi-file-earmark-medical-fill"></i>
                </div>
                <div class="title">Exames</div>
                <div class="descricao-card">
                    Fazer exames de rotina é essencial para detectar problemas de saúde precocemente e garantir uma vida
                    mais longa e saudável.
                </div>
            </a>
        </div>
        <div class="card">
            <a href="agendamento.php" class="link_servicos">
                <div class="icon">
                    <i class="bi bi-capsule"></i>
                </div>
                <div class="title">Agendamentos</div>
                <div class="descricao-card">
                    Agende seus exames de rotina regularmente para garantir cuidados preventivos e evitar complicações
                    futuras. Saúde em dia, vida tranquila!
                </div>
            </a>
        </div>
    </div>
    <p class="subtitulo-serviços">
       <a href="servicos.php" class="link_servicos">Conheça todos os nossos serviços <i class="bi bi-arrow-right"></i></a> 
    </p>

    <!--sessao container sobre nós-->
    <div class="sobrenos">
        <div class="sobrenos-container">
            <div class="column-1">
                <img class="dogSobrenos" src="../img/dogSobrenos.png" alt="">
            </div>
            <div class="column-2">
                <p class="title-sobrenos">
                    Sobre nós
                </p>
                <div class="text-sobrenos">
                    <p class="paragrafos-sobrenos">
                        A clínica veterinária VetPatinhas é especializada em cuidados completos para pets, oferecendo
                        serviços como consultas, exames, cirurgias e emergências.
                    </p>
                    <p class="paragrafos-sobrenos">
                        Com uma equipe dedicada e infraestrutura moderna, a VetPatinhas busca sempre o bem-estar e a
                        saúde dos animais, proporcionando um atendimento acolhedor e tratamentos de alta qualidade.
                    </p>
                    <p class="paragrafos-sobrenos">
                        A clínica ainda conta com especialidades como dermatologia, cardiologia e cuidados intensivos,
                        garantindo que cães, gatos, roedores e aves recebam todo o cuidado que merecem em cada fase da
                        vida.
                    </p>
                </div>
                <div class="botton-saibamais">
                    <a href="sobreNos.php"><button>Leia mais</button></a>
                </div>
            </div>
        </div>
    </div>

    <!--carrosel dos relatos-->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/CarroselRelatos1.png" class="desktop" alt="Banner 1 - Desktop">
                <img src="../img/carrossel_relatos1.png" class="mobile" alt="Banner 1 - Mobile">
            </div>
            <div class="carousel-item">
                <img src="../img/CarroselRelatos2.png" class="desktop" alt="Banner 2 - Desktop">
                <img src="../img/carrossel_relatos2.png" class="mobile" alt="Banner 2 - Mobile">
            </div>
            <div class="carousel-item">
                <img src="../img/CarroselRelatos3.png" class="desktop" alt="Banner 3 - Desktop">
                <img src="../img/carrossel_relatos3.png" class="mobile" alt="Banner 3 - Mobile">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--formulário para enviar o relato do cliente-->
    <div class="formulario">
        <img class="imgforma" src="../img/forma.png" alt="Imagem de forma">
        <img class="imgcachorrogato" src="../img/formCatDog.png" alt="Imagem de cachorro e gato">
        <form class="formRelatos">
            <h1 class="titulo-form">Conte-nos a história do seu PET também!</h1>
            <label for="text">Nome</label>
            <input type="text" placeholder=" " />
            <label for="email">E-mail</label>
            <input type="email" placeholder=" " />
            <label for="text">Escreva a história do seu animalzinho!</label>
            <input type="text" />
            <div class="botton-enviar">
                <button>Enviar</button>
            </div>
        </form>
    </div>

    <!--Informação sobre o horário de funcionamento-->
    <div class="clinicahora">
        <div class="clinica-container">
            <div class="text-coitainer">
                <p class="titulohora">Clínica 24 horas!</p>
                <p class="paragrafo-24horas">
                    Estamos preparados para emergências, com toda a estrutura clínica e suporte para exames, consultas e
                    internações.
                </p>
                <p class="paragrafo-24horas">
                    Proporcionamos a assistência adequada desde a prevenção, tratamento, até a recuperação do animal.
                </p>
                <div class="botton-faleconosco">
                    <a href="contato.php"><button>Fale conosco!</button></a>
                </div>
            </div>
            <div class="coluna-2">
                <img class="imagemcachorro" src="../img/cachorro24h.png" alt="Cachorro 24h">
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>