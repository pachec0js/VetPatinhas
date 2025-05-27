<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../cssIndex/navfooter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--bootstrap link-->
</head> 

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="../img/logo.png" alt="" width="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu serviços-dropdown">
                            <li><a class="dropdown-item" href="exameslab.php">Exames Laboratoriais</a></li>
                            <li><a class="dropdown-item" href="examesimg.php">Exames de imagem</a></li>
                            <li><a class="dropdown-item" href="servicos.php">Serviços oferecidos</a></li>
                           </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Resultados
                        </a>
                        <ul class="dropdown-menu serviços-dropdown">
                            <li><a class="dropdown-item" href="buscaExames.php">Exames</a></li>
                            <li><a class="dropdown-item" href="prontuariocliente.php">Prontuarios</a></li>
                           </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="agendamento.php">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
                
                <a href="clienteperfil.php"><i class="bi bi-person-fill"></i></a>
            </div>
        </div>
    </nav>