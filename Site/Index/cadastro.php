<?php
// Inclui o arquivo de conexão com o banco de dados
include '../connect/conexao.php';

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = [
        "nome_animal" => $_POST['nome_animal'],
        "nome_tutor" => $_POST['nome_tutor'],
        "rga" => $_POST['rga'],
        "telefone" => $_POST['telefone'],
        "email" => $_POST['email'],
        "senha" => $_POST['senha'],
        "cep" => $_POST['cep'],
        "especie" => $_POST['especie'],
        "genero" => $_POST['sample'],
        "porte" => $_POST['porte'],
        "idade" => $_POST['idade'],

    ];

    // Função para verificar se o usuário já existe
    function verificarUsuario($rga, $pdo)
    {
        $sql = "SELECT * FROM usuarios WHERE rga = :rga";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':rga', $rga, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount() > 0; // Retorna true se o usuário existir
    }

    if (verificarUsuario($user['rga'], $pdo)) {
        $msg .= "<p class='msg' style='color:red;' id='msg-failed'>Usuário já cadastrado.</p>";
    } elseif (str_ends_with($user['rga'], '@vetpatinhas.com') || $user['senha'] == "VetPatinh@s") {
        $msg .= "<p class='msg' style='color:red;' id='msg-failed'>Você não tem essa permissão!!.</p>";
        header("Refresh: 2");
    } else {
        $idCadastro = create($pdo, 'usuarios', $user);
        $msg .= '<p class="msg">Sua conta foi criada com sucesso!!</p>';
        header("Refresh: 1; url = login.php");
    }


}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetPatinhas | Cadastro</title>
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="../cssIndex/cadastro.css">
</head>

<body>


    <?php include("nav.php"); ?>
    <!--container geral de cadastro-->
    <?php
    print $msg;
    ?>
    <div class="container">
        <div class="card">
            <div class="form">
                <!--lado esquerdo (fixo)-->
                <div class="left-side">
                    <h2 class="titulocima">Estamos quase lá!</h2>
                    <ul class="progress-bar">
                        <li class="active">Informações do dono</li>
                        <li class="noactive">Informações do PET</li>
                    </ul>
                    <img class="imgladoesquerdo" src="../img/imagemCadastro.png" alt="">
                    <a href="login.php" class="titulobaixo">Já tem uma conta?</a>
                </div>


                <!-- Lado direito -->
                <div class="right-side">
                    <!-- Etapa 1: Informações do tutor -->
                    <div class="main active" id="tutor-step">
                        <form action="cadastro.php" method="POST">
                            <div class="textosprincipais">
                                <h2>COMO É BOM TE-LO AQUI!</h2>
                                <p>Nos dê as informações do tutor</p>
                            </div>
                            <div class="inputs">
                                <div class="input-group">
                                    <input type="text" id="nome_tutor" name="nome_tutor" required>
                                    <label for="nome_tutor">Nome completo</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" id="email_tutor" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="cep_tutor" name="cep" required>
                                    <label for="cep_tutor">CEP</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="senha_tutor" name="telefone" required>
                                    <label for="telefone">Telefone</label>
                                </div>
                                <div class="input-group">
                                    <input type="password" id="senha_tutor" name="senha" required>
                                    <label for="senha">Digite uma senha</label>
                                </div>
                                <div class="nextstep">
                                    <button id="nextstep">Ir para o próximo passo</button>
                                </div>
                                <a href="login.php" class="titulobaixorespons">Já tem uma conta?</a>
                            </div>
                    </div>

                    <!-- Etapa 2: Informações do PET -->
                    <div class="main" id="pet-step">
                        <div class="textosprincipais">
                            <h2>COMO É BOM TE-LO AQUI!</h2>
                            <p>Nos dê as informações do seu PET.</p>
                        </div>
                        <div class="all">
                            <div class="inputs">
                                <div class="filas">
                                    <div class="fila1">
                                        <div class="input-group dois">
                                            <input type="text" id="pet_name" name="nome_animal" required>
                                            <label for="nome_pet">Nome do PET</label>
                                        </div>
                                    </div>

                                    <div class="fila2">
                                        <div class="linha1">
                                            <p class="optiontext">Espécie</p>
                                            <select id="species" name="especie" required>
                                                <option value="cachorro">Cachorro</option>
                                                <option value="gato">Gato</option>
                                                <option value="aves">Ave</option>
                                                <option value="roedores">Roedor</option>
                                            </select>
                                        </div>
                                        <div class="linha2">
                                            <div class="input-text">
                                                <p class="optiontext">Porte</p>
                                                <div class="input-div">
                                                    <select id="size" name="porte" required>
                                                        <option value="pequeno">Pequeno</option>
                                                        <option value="medio">Médio</option>
                                                        <option value="grande">Grande</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fila3">

                                        <div class="linha1">
                                            <p class="genero">Gênero</p>
                                            <div class="opcoes">
                                                <div class="ios-segmented-control">
                                                    <span class="selection"></span>
                                                    <div class="option">
                                                        <input type="radio" id="masc" name="sample" value="masculino"
                                                            checked>
                                                        <label for="masc"><span>Masc</span></label>
                                                    </div>
                                                    <div class="option">
                                                        <input type="radio" id="fem" name="sample" value="feminino">
                                                        <label for="fem"><span>Fem</span></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="linha2">
                                            <p class="espaco">idade</p>
                                            <div class="input-group dois">
                                                <input type="text" id="idade" name="idade" required>
                                                <label for="idade">Idade</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group dois">
                                    <input type="text" id="rga" name="rga" required>
                                    <label for="rga">RGA</label>
                                </div>
                            </div>

                            <div class="buttons">
                                <button id="back_button" class="back_button">Voltar</button>
                                <button type="submit" value="Enviar" class="submit_button">Enviar</button>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

    <script src="../js/cadastro.js"></script>
</body>

</html>