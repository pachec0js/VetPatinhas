<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci minha senha</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/favicon.png">
    <link rel="stylesheet" href="../cssIndex/esquecisenha.css">
</head>
<body>
    <?php
    include("nav.php");
    ?>
    <div class="form">
        <div class="container"> 
            <h1 class="titulo">Esqueceu sua senha?</h1>
           <form class="senha" method="post" >
            <label form="text">Email</label>
            <input type="text" name="senha" required>
            <div class="botaoEntrar">
            <input type="submit" value="Enviar" class="btn">
    </div>
    </div>
     </form>       
</div>

<?php
    include("footer.php");
    ?>
</body>
</html>