<?php include 'navMedicos.php';
// Carregar listas de serviços
$servicos = $pdo->query("SELECT * FROM servicos")->fetchAll(PDO::FETCH_ASSOC);
//Definir a data como a atual
$hoje = date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar arquivo</title>
    <link rel="stylesheet" href="../cssAdm/enviarexame.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<h2>Enviar arquivo</h2>

<div class="form col-8 ms-5">
    <form action="enviarexame.php" method="post" enctype="multipart/form-data">
        <input type="text" name="data_exame" value="<?php echo $hoje; ?>" required>
        <select name="nome_exame" required>
                        <option value="" disabled selected>Selecione o exame agendado</option>
                        <?php foreach ($servicos as $servico): ?>
                            <option value="<?= $servico['nome'] ?>"><?= $servico['nome'] ?></option>
                        <?php endforeach; ?>
        <input type="text" name="numero_acesso" value="<?php echo rand(10000000, 99999999); ?>" readonly required>
        <input type="password" name="senha_acesso" value="vetpatinhas" readonly required>
        <input type="file" name="pdf_arquivo" accept="application/pdf" required><?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data_exame = $_POST['data_exame'];
    $nome_exame = $_POST['nome_exame'];
    $numero_acesso = $_POST['numero_acesso'];
    $senha_acesso = $_POST['senha_acesso']; 
    $pdf_arquivo = file_get_contents($_FILES['pdf_arquivo']['tmp_name']); // Lê o conteúdo do arquivo PDF


    // Inserção no banco de dados
    $stmt = $pdo->prepare("INSERT INTO documento (data_exame, nome_exame, numero_acesso, senha_acesso, pdf_arquivo) 
                           VALUES (?, ?, ?, ?, ?)");

    // Bind dos parâmetros para a consulta
    $stmt->bindParam(1, $data_exame, PDO::PARAM_STR);
    $stmt->bindParam(2, $nome_exame, PDO::PARAM_STR);
    $stmt->bindParam(3, $numero_acesso, PDO::PARAM_STR);
    $stmt->bindParam(4, $senha_acesso, PDO::PARAM_STR); 
    $stmt->bindParam(5, $pdf_arquivo, PDO::PARAM_LOB); 

    // Executa a inserção
    if ($stmt->execute()) {
        echo '<p class="certo">Dados inseridos com sucesso!<p>';
    } else {
        echo '<p class="erro">Erro ao inserir o arquivo!</p> ' . $stmt->errorInfo()[2];
    }



    // Fechar a conexão
    $stmt = null;
    $pdo = null;
}
?>
        <input type="submit" value="Gravar PDF">
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>
</html>