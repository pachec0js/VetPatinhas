<?php
include '../connect/conexao.php';
if (!isset($_SESSION['usuario']) && !isset($_SESSION['medico'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Contato</title>
    <link rel="stylesheet" href="../cssIndex/contato.css"> <!--conexão com o css-->
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><!--Fonte utilizada-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!--bootstrap link-->
</head>
<body>
<?php
    include("nav.php");
    ?>
      <div class="container">
        <div class="contato">
            <div class="imgcontato">
              <img class="dog-contato" src="../img/contato.png">
            </div>
            <div class="formcontato">
              <h1>Contato</h1>
              <div class="espaco2"></div>
              <label for="formGroupExampleInput" class="form-label">Nome</label>
                <input type="text" class="form-control" id="" placeholder="Nome Sobrenome">
                <div class="espaco"></div>
                <label for="formGroupExampleInput2" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="" placeholder="nome@email.com">
                <div class="espaco"></div>
                <label for="formGroupExampleInput3" class="form-label">Mensagem</label>
                  <textarea class="form-control" aria-label="With textarea" placeholder="Escreva aqui sua mensagem"></textarea>
                <div class="espaco"></div>
                <input type="submit" class="enviar">
            </div>
          </div>
        </div>
      <?php
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

