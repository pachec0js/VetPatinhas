<?php
session_start(); // Inicia a sessão para armazenar a mensagem de erro

// Incluir a conexão com o banco de dados ou o arquivo de CRUD
include('conexao.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $numero_acesso = $_POST['numero_acesso'];
    $senha = $_POST['senha'];

    // Preparar a consulta SQL para buscar pelo número de acesso
    $sql = "SELECT * FROM documento WHERE numero_acesso = :numero_acesso";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':numero_acesso', $numero_acesso, PDO::PARAM_STR);
    $stmt->execute();

    // Verificar se o número de acesso existe
    $documento = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($documento) {
        // Verificar se a senha corresponde ao número de acesso
        if ($senha = $documento['senha_acesso']) {
            // Se a senha for válida, exibir o nome do cliente e o link para o PDF
            $_SESSION['nome_exame'] = $documento['nome_exame']; // Armazena o nome do cliente na sessão
            $_SESSION['id_documento'] = $documento['id_documento']; // Armazena o ID do documento na sessão
            header("Location: ../Index/resultadofinal.php"); // Redireciona para a página do resultado
            exit();
        } else {
            $_SESSION['erro'] = "Senha incorreta!";
            header("Location: ../Index/buscaExames.php"); // Redireciona de volta para a página inicial com erro
            exit();
        }
    } else {
        $_SESSION['erro'] = "Número de acesso não encontrado!";
        header("Location: ../Index/buscaExames.php"); // Redireciona de volta para a página inicial com erro
        exit();
    }
}
