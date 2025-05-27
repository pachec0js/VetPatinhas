<?php
// Inclui o arquivo de navegação, que contem o menu dos medicos.
include 'navMedicos.php';

// Inicializa uma variável para exibir mensagens ao usuário
$msg = '';

// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Verifica se o ID do medicamento foi fornecido
   if (isset($_POST['id_medicamentos']) && !empty($_POST['id_medicamentos'])) {
       $id_medicamentos = $_POST['id_medicamentos'];

       // Coleta os dados enviados pelo formulário e os organiza em um array
       $medicamento = [
           "nome" => $_POST['nome'],
           "categoria" => $_POST['categoria'],
           "quantidade" => $_POST['quantidade'],
           "dosagem" => $_POST['dosagem'],
           "forma" => $_POST['forma'],
           "data_validade" => $_POST['data_validade'],
           "fornecedor" => $_POST['fornecedor'],
           "ultima_compra" => $_POST['ultima_compra'],
           "observacoes" => $_POST['observacoes'],
       ];

       // Atualiza o registro no banco de dados usando a função "update"
       $linhasAfetadas = update($pdo, 'estoque', $medicamento, "id_medicamentos = $id_medicamentos");
       
       // Define a mensagem de sucesso ou erro com base no resultado
       if ($linhasAfetadas > 0) {
           $msg = "Medicamento atualizado com sucesso!";
           header('Location: estoque.php');
       } else {
           $msg = "Nenhuma alteração foi feita ou ocorreu um erro.";
       }
   } else {
       $msg = "ID do medicamento não informado.";
   }
} else {
   // Caso o formulário não tenha sido enviado, verifica se o ID do medicamento foi passado via GET
   if (isset($_GET['id']) && !empty($_GET['id'])) {
       $id_medicamentos = $_GET['id'];

       // Busca os dados do medicamento no banco de dados usando a função "read"
       $medicamento = read($pdo, 'estoque', "id_medicamentos = $id_medicamentos");
       
       // Caso o medicamento não seja encontrado, exibe um erro e interrompe o script
       if (!$medicamento) {
           die("Medicamento não encontrado.");
       }
   } else {
       die("ID do medicamento não fornecido.");
   }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atualizar Medicamento</title>
<!-- Inclui o CSS do Bootstrap para estilização -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Inclui um arquivo CSS personalizado -->
<link rel="stylesheet" href="../cssAdm/atualizaestoque.css">
</head>
<body>
<div class="container">
    <div class="form-content">
        <h1 class="mb-4">Atualizar Medicamento</h1>
        
        <!-- Exibe mensagens de feedback ao usuário -->
        <?php if ($msg): ?>
        <div class="alert alert-info"><?php echo $msg; ?></div>
        <?php endif; ?>

        <!-- Formulário de atualização dos dados do medicamento -->
        <form action="atualizaestoque.php" method="post">
            <input type="hidden" name="id_medicamentos" value="<?php echo $medicamento['id_medicamentos']; ?>">
            
            <!-- Campos do formulário com valores preenchidos pelos dados do banco -->
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $medicamento['nome']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" id="categoria" value="<?php echo $medicamento['categoria']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" id="quantidade" value="<?php echo $medicamento['quantidade']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dosagem" class="form-label">Dosagem</label>
                <input type="text" name="dosagem" class="form-control" id="dosagem" value="<?php echo $medicamento['dosagem']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="forma" class="form-label">Forma</label>
                <input type="text" name="forma" class="form-control" id="forma" value="<?php echo $medicamento['forma']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="data_validade" class="form-label">Data de Validade</label>
                <input type="text" name="data_validade" class="form-control" id="data_validade"
                      value="<?php echo date('d/m', strtotime($medicamento['data_validade'])); ?>"
                      placeholder="DD/MM" required>
            </div>
            <div class="mb-3">
                <label for="fornecedor" class="form-label">Fornecedor</label>
                <input type="text" name="fornecedor" class="form-control" id="fornecedor" value="<?php echo $medicamento['fornecedor']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ultima_compra" class="form-label">Última Compra</label>
                <input type="text" name="ultima_compra" class="form-control" id="ultima_compra"
                      value="<?php echo date('d/m', strtotime($medicamento['ultima_compra'])); ?>"
                      placeholder="DD/MM" required>
            </div>
            <div class="mb-3">
                <label for="observacoes" class="form-label">Observações</label>
                <textarea name="observacoes" class="form-control" id="observacoes" rows="3"><?php echo $medicamento['observacoes']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="estoque.php" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
    <div class="form-image">
        <!-- Espaço reservado para imagens ou decoração -->
    </div>
</div>

<!-- Inclui o JavaScript do Bootstrap para funcionalidades dinâmicas -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
