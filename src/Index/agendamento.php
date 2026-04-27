<?php

// Inclui o arquivo de conexão com o banco de dados
include '../connect/conexao.php';
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION['usuario']) && !isset($_SESSION['medico'])) {
    header("Location: login.php");
    exit;
}

// Carregar listas de serviços e médicos
$servicos = $pdo->query("SELECT * FROM servicos")->fetchAll(PDO::FETCH_ASSOC);
$medicos = $pdo->query("SELECT * FROM medicos")->fetchAll(PDO::FETCH_ASSOC);

// Filtrar animais registrados com o e-mail do tutor logado
$emailTutor = $_SESSION['usuario']['email'];
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->execute(['email' => $emailTutor]);
$animais = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_funcionario = $_POST['nome_funcionario'];
    $tipo = $_POST['tipo'];
    $especialidade = $_POST['especialidade'];
    $nome_animal = $_POST['nome_animal'];
    $porte = $_POST['porte'];
    $nome_tutor = $_POST['nome_tutor'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $situacao = $_POST['situacao'];
    $dia = $_POST['dia'];
    $horario = $_POST['horario'];

    // Verificar conflitos de horário
    $stmt = $pdo->prepare("SELECT * FROM agendamentos WHERE nome_funcionario = :nome_funcionario AND horario = :horario");
    $stmt->execute(['nome_funcionario' => $nome_funcionario, 'horario' => $horario]);

    if ($stmt->rowCount() > 0) {
        $erro = "Este horário já está ocupado para o médico selecionado.";
    } else {
        // Inserir o agendamento no banco de dados
        $sql = "INSERT INTO agendamentos (nome_funcionario, tipo, especialidade, nome_animal, porte, nome_tutor, email, telefone, situacao, dia, horario)
                VALUES (:nome_funcionario, :tipo, :especialidade, :nome_animal, :porte, :nome_tutor, :email, :telefone, :situacao, :dia, :horario)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nome_funcionario' => $nome_funcionario,
            'tipo' => $tipo,
            'especialidade' => $especialidade,
            'nome_animal' => $nome_animal,
            'porte' => $porte,
            'nome_tutor' => $nome_tutor,
            'email' => $email,
            'telefone' => $telefone,
            'situacao' => $situacao,
            'dia' => $dia,
            'horario' => $horario
        ]);

        $sucesso = "Agendamento realizado com sucesso!";
        header("Refresh: 1; url = index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Agendamento</title>
    <link rel="stylesheet" href="../cssIndex/agendamento.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <h1 class="tituloprincipal">Agendamento</h1>
    <div class="container">
        <div class="box">
            <?php if (isset($erro))
                echo "<p style='color: red;'>$erro</p>"; ?>
            <?php if (isset($sucesso))
                echo "<p style='color: green;'>$sucesso</p>"; ?>

            <form method="POST">
                <div class="main active" id="first-step">
                    <p class="titulo">Serviço</p>
                    <select name="tipo" id="tipo" required>
                        <option value="" disabled selected></option>
                        <option value="serviço">Serviço</option>
                        <option value="exames de imagem">Exames de Imagem</option>
                        <option value="exames laboratoriais">Exames Laboratoriais</option>
                    </select>
                    <p class="titulo">Especialidade</p>
                    <select name="especialidade" id="especialidade" required>
                        <option value="" disabled selected></option>
                        <?php foreach ($servicos as $servico): ?>
                            <option value="<?= $servico['nome'] ?>"><?= $servico['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <p class="titulo">Médico</p>
                    <select name="nome_funcionario" id="nome_funcionario" required>
                        <option value="" disabled selected></option>
                        <?php foreach ($medicos as $medico): ?>
                            <option value="<?= $medico['nome'] ?>"><?= $medico['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="nextstep">
                        <button id="nextstep">Ir para o próximo passo</button>
                    </div>
                </div>

                <div class="main" id="second-step">
                    <div class="form">
                        <div class="column">
                            <div class="input-box">
                                <label for="nome_animal">Animal</label>
                                <input type="text" name="nome_animal" value="<?= $_SESSION['usuario']['nome_animal'] ?>"
                                    readonly required>
                            </div>
                            <div class="input-box">
                                <label for="porte">Porte</label>
                                <input type="text" name="porte" value="<?= $_SESSION['usuario']['porte'] ?>" readonly
                                    required>
                            </div>
                        </div>

                        <div class="column">
                            <div class="input-box">
                                <label for="nome_tutor">Tutor</label>
                                <input type="text" name="nome_tutor" value="<?= $_SESSION['usuario']['nome_tutor'] ?>"
                                    readonly required>
                            </div>
                            <div class="input-box">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?= $_SESSION['usuario']['email'] ?>" readonly
                                    required>
                            </div>
                        </div>
                        <div>

                            <div class="column">
                                <div class="input-box">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" name="telefone" value="<?= $_SESSION['usuario']['telefone'] ?>"
                                        readonly required>
                                </div>
                                <div class="input-box">
                                    <label for="situacao">Situação</label>
                                    <select name="situacao" id="situacao" required>
                                        <option value="" disabled selected></option>
                                        <option value="sem risco">Sem risco</option>
                                        <option value="emergencial">Emergencial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label for="dia">Dia</label>
                                    <input type="date" name="dia" required>
                                </div>
                                <div class="input-box">
                                    <label for="horario">Horário</label>
                                    <select name="horario" id="horario" required>
                                        <option value="" disabled selected></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <button id="back_button" class="back_button">Voltar</button>
                            <button type="submit" class="submit_button">Agendar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>

 
    <script src="../js/agendamento.js"></script>

</body>

</html>