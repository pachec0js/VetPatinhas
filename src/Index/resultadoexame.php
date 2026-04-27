<?php
session_start();

include 'nav.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Exames</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/favicon.png">
    <link rel="stylesheet" href="./css/resultadosExames.css">
</head>
<body>

    <div class="container">
        <div class="titulo">
            <h1>Resultados de Exames</h1>
        </div>

        <div class="resultados">
            <div class="form">
            <div class="confira-resultados">
                <h2 class="tituloconfiraresultados">Confira os resultados dos exames!</h2>
                    <form method="POST" action="./connect/resultado.php"> <!-- Envia os dados para a segunda página -->
                    <label for="acesso" class="form-label">Número de acesso</label>
                <input type="text" class="form-control" name="numero_acesso" placeholder="">
                <label for="senha" class="form-label">Senha</label>
                <input type="text" class="form-control" name="senha" placeholder="">
                <!-- Verifica se há alguma mensagem de erro -->
    
                <?php if (isset($_SESSION['erro'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['erro']; ?>
                <?php unset($_SESSION['erro']); // Apaga a mensagem de erro depois de exibi-la ?>
            </div>
        <?php endif; ?>
                    <input type="submit" value="Acessar" class="confirmar-button">
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<?php 
include 'footer.php';