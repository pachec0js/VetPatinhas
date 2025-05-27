<?php
// Inclui o arquivo com a navegação específica para médicos
include 'navMedicos.php';

// Obtém o nome do médico logado a partir da sessão
$nome_medico = $_SESSION['medico']['nome'];

// Prepara uma consulta SQL para buscar os agendamentos do médico logado, ordenados por horário
$stmt = $pdo->prepare("SELECT * FROM agendamentos WHERE nome_funcionario = :nome_funcionario ORDER BY horario ASC");
// Liga o nome do médico à consulta usando um parâmetro nomeado
$stmt->bindParam(':nome_funcionario', $nome_medico, PDO::PARAM_STR);
// Executa a consulta
$stmt->execute();
// Obtém todas as linhas resultantes da consulta em forma de array associativo
$consultas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Marcadas</title>
    <!-- Inclui o framework Bootstrap para estilização -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inclui um arquivo CSS personalizado -->
    <link rel="stylesheet" href="../cssAdm/calendario.css">
</head>

<body>

    <div class="container text-center tabela">
        <div class="row">
            <div class="col-md-12">
                <!-- Verifica se há consultas agendadas -->
                <?php if (count($consultas) > 0): ?>
                    <table>
                        <thead>
                            <div class="table-title">
                                <!-- Exibe o nome do médico e um título -->
                                <h1>Próximas consultas para Dr(a). <?= ($nome_medico) ?></h1>
                            </div>
                            <tr class="linha">
                                <!-- Define os cabeçalhos da tabela -->
                                <th>Especialidade</th>
                                <th>Animal</th>
                                <th>Porte</th>
                                <th>Situação</th>
                                <th>Data e Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Itera sobre cada consulta retornada -->
                            <?php foreach ($consultas as $consulta): ?>
                                <tr class="linha">
                                    <!-- Exibe a especialidade da consulta -->
                                    <td><?= ($consulta['especialidade']) ?></td>
                                    <!-- Exibe o nome do animal da consulta -->
                                    <td><?= ($consulta['nome_animal']) ?></td>
                                    <!-- Exibe o porte do animal -->
                                    <td><?= ($consulta['porte']) ?></td>
                                    <!-- Define uma classe CSS com base na situação da consulta -->
                                    <td class="<?php 
                                            // Verifica a situação e atribui uma classe CSS correspondente
                                            if ($consulta['situacao'] == "sem risco") {
                                                $stylesitu = "sem-risco";
                                            } else {
                                                $stylesitu = "emergencial";
                                            }
                                            // Imprime a classe CSS
                                            echo $stylesitu; ?>">
                                        <!-- Exibe a situação dentro de uma lista -->
                                        <li><?= ($consulta['situacao']) ?></li>
                                    </td>
                                    <!-- Formata a data e hora da consulta e exibe -->
                                    <td><?= date('d/m/Y H:i', strtotime($consulta['horario']));
                                    echo 'hrs'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <!-- Exibe uma mensagem caso não haja consultas -->
                    <p>Não há consultas marcadas para o momento.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>
