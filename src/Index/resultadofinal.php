<?php

include('../connect/conexao.php');

$id_documento = $_SESSION['id_documento'];

// consulta SQL para buscar o documento pelo ID
$sql = "SELECT * FROM documento WHERE id_documento = :id_documento";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id_documento', $id_documento, PDO::PARAM_INT);
$stmt->execute();

$documentos = $stmt->fetch(PDO::FETCH_ASSOC);
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Resultado</title>
    <link rel="stylesheet" href="../cssIndex/resultadofinal.css">
</head>

<body>
    <div class="container">
        <h3 class="titulo">Resultados</h3>


        <table class="resultados">
            <tr class="nomes">
                <th>Data</th>
                <th>Exame</th>
                <th>Resultado</th>
            </tr>

            <?php

            echo '<tr class="nomes">
<td>' . $documentos['data_exame'] . '</td>
<td>' . $documentos['nome_exame'] . '</td>
<td><a href="baixarexame.php?id=' . $documentos['id_documento'] .
                '"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg></a></td>
</tr>';



            ?>
        </table>
    </div>
</body>

</html>

<?php include 'footer.php';
?>