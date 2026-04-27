<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo PDF</title>
</head>
<body>

<?php
    include '../connect/conexao.php';
    

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Preparando a consulta
        $stmt = $pdo->prepare("SELECT nome_exame, pdf_arquivo FROM documento WHERE id_documento = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        $stmt->execute();

        // Obtendo o resultado da consulta
        $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verificando se o arquivo foi encontrado
        if ($retorno) {
            $filename = $retorno['nome_exame'] . ".pdf";
            $pdf_content = $retorno['pdf_arquivo']; 

            // Definindo os cabeçalhos HTTP para exibição do PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Content-Length: ' . strlen($pdf_content));
            
            // Enviar o conteúdo do arquivo para o navegador
            echo $pdf_content;
            exit;
        } else {
            echo "Arquivo não encontrado!";
        }

        // Liberar recursos
        $stmt = null;
    }

    // Fechar a conexão PDO
    $pdo = null;
?>

</body>
</html>
