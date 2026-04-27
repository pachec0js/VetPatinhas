<?php
// Incluir arquivo de configuração
require_once '../connect/conexao.php';

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: index.php");
  exit;
}

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $whereuser = 'rga  = "' . $_POST['login'] .'" and senha = "' . $_POST['senha'] . '"';
  $whereadm = 'email = "' . $_POST['login'] .'" and senha = "' . $_POST['senha'] . '"';
  $usuario = read($pdo, 'usuarios', $whereuser);
  $medico = read($pdo, 'medicos', $whereadm);

  if (str_ends_with($_POST['login'], '@vetpatinhas.com') && $_POST['senha'] == "VetPatinh@s") {
    if (!$medico) {
      $msg .= "<b>Este login de administrador não existe</b>";
    } else {
      $_SESSION['medico'] = $medico;
      header('Location: ../adm/admperfil.php');
    }
  } else if (!$usuario) {
    $msg = "<b>RGA ou senha inválida</b>";
  } else {
    print_r($usuario);
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
  }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VetPatinhas | Login</title>
  <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
  <link rel="stylesheet" href="../cssIndex/login.css">
</head>

<body>
  <?php
  include("nav.php");
  print $msg;
  ?>
  <div class="form">
    <div class="container">
      <div class="ladoesquerdo">
        <div class="titulo">
          <h1>LOGIN</h1>
          <p>Bem vind(o)a de volta! :)</p>
        </div>
        <form class="login" method="post">
          <label form="text">Usuário</label>
          <input type="text" name="login" required>
          <label form="text">Senha</label>
          <input type="password" name="senha" required>
          <a class="esquecisenha" href="esquecisenha.php">
            <p>Esqueci minha senha</p>
          </a>
          <div class="botaoEntrar">
            <input type="submit" value="Entrar" class="btn">
          </div>
          <div class="naomembroresponsive">
            <p class="textonmembro">Não é membro?</p><a class="textocadastrese" href="../cadastro.php">Cadastre-se</a>
          </div>
      </div>
      <div class="ladodireito">
        <img class="imggato" src="../img/gatoLogin.png" alt="" srcset="">
        <div class="textoscadastro">
          <p class="naomembro">NÃO É MEMBRO AINDA?</p>
          <a class="cadastrese" href="cadastro.php">
            <p>Cadastre-se agora!</p>
          </a>
        </div>
      </div>
    </div>
    </form>
  </div>

  <?php
  include("footer.php");
  ?>
</body>

</html>