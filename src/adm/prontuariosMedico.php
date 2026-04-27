<?php

include 'navMedicos.php';

// Verifica se o médico está logado
if (!isset($_SESSION['medico'])) {
    header("Location: login.php");
    exit;
}

// Obter os prontuários enviados pelo médico logado
$stmt = $pdo->prepare("
    SELECT p.prontuario_pdf, u.nome_animal, a.horario
    FROM prontuarios p
    JOIN usuarios u ON p.id_animal = u.id_animal
    JOIN agendamentos a ON p.id_consulta = a.id_consulta
    WHERE p.id_medico = :id_medico
");
$stmt->execute(['id_medico' => $_SESSION['medico']['id_funcionario']]);
$prontuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuários</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/favicon.png">
    <link rel="stylesheet" href="../cssAdm/prontuariosMedico.css">

</head>

<body>
    <div class="container">

        <table>

            <thead>
                <div class="table-title ps-5 ">
                    <h2 class="h2">Prontuários dos Pacientes</h2>
                    <h5 class="h5">Prontuários dos Pacientes</h5>
                    <div class="button">
                        <a href="./enviarprontuario.php" class="add-icon me-1"><i class="bi bi-clipboard-plus-fill"></i></a>
                    </div>
                </div>
                <tr class="linha">
                    <th>Nome</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($prontuarios)): ?>
                    <?php foreach ($prontuarios as $prontuario): ?>
                        <tr>
                            <td><?= htmlspecialchars($prontuario['nome_animal']) ?></td>
                            <td>
                                <a href="<?= htmlspecialchars($prontuario['prontuario_pdf']) ?>" target="_blank"
                                    class="ver-mais">
                                    Ver mais
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">Nenhum prontuário enviado até o momento.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>