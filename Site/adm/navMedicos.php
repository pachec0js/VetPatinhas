<?php
include '../connect/conexao.php';

// Verifica se o médico está logado
if (!isset($_SESSION['medico'])) {
    header("Location: ../connect/403.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../cssAdm/navMedicos.css"> <!--conexão com o css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!--bootstrap link-->
  </head>
  <body>
    <div class="side">
    <ul class="navside">
        <a href="admperfil.php"><img class="logo" src="../img/LogoFooterVetPatinhas.png" width="100px" height="100px"></a>
        <a href="calendario.php"><i class="bi bi-calendar4-week icon"></i></a>

        <a href="prontuariosMedico.php"><i class="bi bi-files"></i></a>

        <a href="estoque.php"><i class="bi bi-prescription2"></i></a>
    
        <a href="./enviarexame.php"><i class="bi bi-file-earmark-plus-fill"></i></a>
      
        <a href="./admperfil.php"><i class="bi bi-person"></i></a>
      </ul>
    </div>
      </div>
      
     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>
</html>