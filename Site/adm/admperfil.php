<?php
include 'navMedicos.php';
// Inclui o arquivo 'navMedicos.php', que contém o código para o menu de navegação da página.
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- Define o padrão de caracteres UTF-8 para suporte a caracteres especiais. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define as dimensões da página para que seja responsiva em dispositivos móveis. -->
    <title>Document</title>
    <!-- Título do documento que aparece na aba do navegador. -->
    <link rel="stylesheet" href="../cssAdm/admperfil.css">
    <!-- Importa um arquivo CSS local para estilização personalizada da página. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Importa o framework Bootstrap para ajudar na estilização e responsividade. -->
</head>
<body>
<?php
    // Exibe informações do perfil médico usando dados armazenados na sessão.
    // O HTML é gerado dinamicamente com base nos valores de $_SESSION['medico'].
    echo '
    <h1 class="tituloperfil">Informações do Perfil</h1>
    <!-- Cabeçalho principal da página. -->
    <ul class="lista">
        <!-- Lista não ordenada para exibir os detalhes do perfil médico. -->
        <b><li>Nome: </b> ' .  $_SESSION['medico']['nome'] . ' </li>
        <!-- Nome do médico, recuperado da sessão. -->
        <b><li>E-mail registrado: </b> '.  $_SESSION['medico']['email'] .' </li>
        <!-- E-mail do médico. -->
        <b><li>Telefone: </b> '.  $_SESSION['medico']['telefone'] .'</li>
        <!-- Telefone do médico. -->
        <b><li>CEP: </b>' .  $_SESSION['medico']['cpf'] .'</li>
        <!-- Possível erro: O campo CEP está exibindo o CPF. -->
        <b><li>Idade: </b> '.  $_SESSION['medico']['datanasc'] .'</li>
        <!-- Data de nascimento do médico. É possível converter isso para calcular a idade. -->
    </ul>'
    ?>
    <div class="buttonsperfil">
        <!-- Botão para logout, redirecionando para o script de desconexão. -->
        <a href="../connect/logout.php" >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <!-- Ícone SVG para representar a ação de logout. -->
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                <!-- Define o contorno da caixa para o ícone. -->
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                <!-- Define a seta apontando para fora da caixa. -->
            </svg>
        </a>
    </div>
</body>
</html>

