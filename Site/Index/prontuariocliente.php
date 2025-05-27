<?php
include '../connect/conexao.php';
if (!isset($_SESSION['usuario']) && !isset($_SESSION['medico'])) {
    header("Location: login.php");
    exit;
}

// Buscar prontuários do cliente
$stmt = $pdo->prepare("
    SELECT p.prontuario_pdf, a.nome_animal, a.especialidade, a.dia 
    FROM prontuarios p 
    JOIN agendamentos a ON p.id_consulta = a.id_consulta 
    JOIN usuarios u ON a.nome_animal = u.nome_animal 
    WHERE u.email = :email
");
$stmt->execute(['email' => $_SESSION['usuario']['email']]);
$prontuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Prontuários</title>
    <link rel="stylesheet" href="../cssIndex/prontuariocliente.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
</head>

<body>
    <?php
    include("nav.php");
    if (empty($prontuarios)): ?>
        <table>
            <thead>
                <tr class="linha">
                    <th>
                        <h2>Prontuários</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nenhum prontuário disponível no momento.</th>
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <table>
            <thead>
                <tr class="linha">
                    <th>Nome</th>
                    <th>Especialidade</th>
                    <th>Data</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prontuarios as $prontuario): ?>
                    <tr class="linha">
                        <th><?= $prontuario['nome_animal'] ?></th>
                        <th><?= $prontuario['especialidade'] ?> </th>
                        <th><?= $prontuario['dia'] ?> </th>
                        <th><a href="<?= $prontuario['prontuario_pdf'] ?>" target="_blank"><i class="bi bi-eye-fill olho"></i><i class="bi bi-download olho"></i></a></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="index.php" class="voltar">Voltar</a>
    <?php
    include("footer.php");
    ?>
</body>

</html>