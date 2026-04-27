<?php
include 'navMedicos.php';

// Buscar consultas relacionadas ao médico
$stmt = $pdo->prepare("
    SELECT a.*, u.nome_animal, u.nome_tutor, u.id_animal,
    (SELECT COUNT(*) FROM prontuarios p WHERE p.id_consulta = a.id_consulta) AS tem_prontuario
    FROM agendamentos a
    JOIN usuarios u ON a.nome_animal = u.nome_animal
    WHERE a.nome_funcionario = :nome_medico
");
$stmt->execute(['nome_medico' => $_SESSION['medico']['nome']]);
$consultas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Processar upload do prontuário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_consulta = $_POST['id_consulta'];
    $id_animal = $_POST['id_animal'];

    if (!empty($_FILES['prontuario_pdf']['name'])) {
        $arquivo = $_FILES['prontuario_pdf'];
        $destino = "../uploads/prontuarios/" . uniqid() . ".pdf";

        if (move_uploaded_file($arquivo['tmp_name'], $destino)) {
            // Inserir prontuário no banco
            $stmt = $pdo->prepare("
                INSERT INTO prontuarios (id_consulta, id_medico, id_animal, prontuario_pdf)
                VALUES (:id_consulta, :id_medico, :id_animal, :prontuario_pdf)
            ");
            $stmt->execute([
                'id_consulta' => $id_consulta,
                'id_medico' => $_SESSION['medico']['id_funcionario'],
                'id_animal' => $id_animal,
                'prontuario_pdf' => $destino
            ]);

            $sucesso = "Prontuário enviado com sucesso!";
            header("Refresh: 2");
        } else {
            $erro = "Erro ao enviar o arquivo.";
        }
    } else {
        $erro = "Nenhum arquivo foi enviado.";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Prontuário</title>
    <link rel="stylesheet" href="../cssAdm/enviarprontuario.css">
</head>

<body>

    <div class="main-content col-10 ms-6">
        <h1>Adicionar Prontuário</h1>
        <?php if (isset($erro)): ?>
            <div class="alert alert-danger"><?= ($erro) ?></div>
        <?php endif; ?>

        <?php if (isset($sucesso)): ?>
            <div class="alert alert-success"><?= ($sucesso) ?></div>
        <?php endif; ?>
        <div class="form ">
        <form method="POST" enctype="multipart/form-data">
        <label for="id_consulta">Selecione a consulta:</label>
        <select name="id_consulta" id="id_consulta" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <?php foreach ($consultas as $consulta): ?>
                <?php if ($consulta['tem_prontuario'] == 0): ?>
                    <option value="<?= $consulta['id_consulta'] ?>">
                        <?= $consulta['especialidade'] ?> - <?= $consulta['nome_animal'] ?> (<?= $consulta['horario'] ?>)
                    </option>
                <?php else: ?>
                    <option disabled>
                        <?= $consulta['especialidade'] ?> - <?= $consulta['nome_animal'] ?> (<?= $consulta['horario'] ?>) - Prontuário já adicionado
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="id_animal">Animal relacionado:</label>
        <select name="id_animal" id="id_animal" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <?php foreach ($consultas as $consulta): ?>
                <?php if ($consulta['tem_prontuario'] == 0): ?>
                    <option value="<?= $consulta['id_animal'] ?>">
                        <?= $consulta['nome_animal'] ?> - Tutor: <?= $consulta['nome_tutor'] ?>
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="prontuario_pdf">Upload do Prontuário (PDF):</label>
        <input type="file" name="prontuario_pdf" id="prontuario_pdf" accept="application/pdf" required>
        <br><br>
        <input type="submit"></input>
    </form>
        </div>
    </div>

</body>

</html>

