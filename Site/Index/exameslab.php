<?php
$cards = [
    [
        "icone" => "fas fa-dna",
        "title" => "Biologia Molecular",
        "text" => "A biologia molecular estuda a interação entre moléculas como DNA, RNA e proteínas. Técnicas como PCR e sequenciamento de DNA são essenciais no diagnóstico de doenças genéticas."
    ],
    [
        "icone" => "fas fa-flask",
        "title" => "Bioquímica",
        "text" => "A bioquímica estuda as reações químicas e biomoléculas essenciais para a vida. Contribui para o desenvolvimento de medicamentos e vacinas, além de ajudar no diagnóstico de doenças."
    ],
    [
        "icone" => "fas fa-cogs",
        "title" => "Citologias",
        "text" => "A citologia estuda as células e suas funções, como o ciclo celular e mitose. A análise é fundamental no diagnóstico de câncer e doenças genéticas, como no exame de Papanicolau."
    ],
    [
        "icone" => "fas fa-user-md",
        "title" => "Dermatologia",
        "text" => "A dermatologia estuda as doenças da pele, cabelo e unhas, como acne e psoríase. Também realiza procedimentos estéticos, como remoção de sinais e rejuvenescimento da pele."
    ],
    [
        "icone" => "fas fa-toilet-paper",
        "title" => "Fezes",
        "text" => "As fezes resultam da digestão e sua análise pode indicar doenças intestinais. Exames como o teste de sangue oculto ajudam a identificar condições como cânceres e úlceras."
    ],
    [
        "icone" => "fas fa-tint",
        "title" => "Hematologia",
        "text" => "A hematologia estuda o sangue e seus componentes, como hemácias e leucócitos. Diagnostica doenças como anemia e leucemia, fornecendo dados essenciais para distúrbios de coagulação."
    ],
    [
        "icone" => "fas fa-balance-scale",
        "title" => "Hormônios",
        "text" => "Os hormônios regulam funções fisiológicas como crescimento e metabolismo. O estudo hormonal é essencial no diagnóstico de distúrbios endócrinos e no desenvolvimento de tratamentos."
    ],
    [
        "icone" => "fas fa-droplet",
        "title" => "Líquidos Cavitários",
        "text" => "Os líquidos cavitários, como o líquido cefalorraquidiano e pleural, são essenciais para várias funções corporais. Sua análise ajuda a diagnosticar infecções e cânceres."
    ],
    [
        "icone" => "fas fa-bacteria",
        "title" => "Microbiologia",
        "text" => "A microbiologia estuda microrganismos causadores de doenças, como bactérias e vírus. Avanços em antibióticos e antivirais são essenciais no combate a doenças infecciosas."
    ],
    [
        "icone" => "fas fa-biohazard",
        "title" => "Patologia",
        "text" => "A patologia estuda as doenças e suas causas, como inflamação e neoplasia. A análise histopatológica e molecular ajuda a diagnosticar câncer e doenças autoimunes."
    ],
    [
        "icone" => "fas fa-vials",
        "title" => "Sorologias",
        "text" => "As sorologias detectam anticorpos ou antígenos no sangue, diagnosticando infecções como HIV e hepatite. Também são importantes no diagnóstico de doenças autoimunes, como lupus."
    ],
    [
        "icone" => "fas fa-tint",
        "title" => "Urina",
        "text" => "A urinálise avalia a saúde renal e metabólica, sendo essencial no diagnóstico de doenças como infecções urinárias e diabetes. Também monitora o efeito de tratamentos, como medicamentos diuréticos."
    ]
 ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssIndex/modelcards.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>VetPatinhas | Exames laboratoriais</title>
</head>
<body>
<?php
    include("nav.php");
    ?>

    <div class="voltar">
        <a href="index.php"><i class="bi bi-chevron-left"></i> Voltar</a>
    </div>
 
      <div class="content">
<?php
  $contador = 0;
  foreach ($cards as $card) {
      echo '
<div class="col-12 col-md-6 col-lg-4 mt-5 mb-5"> 
<div class="card">
<div class="card-body">
<div class="icon text-center mb-0">
<i class="'.$card['icone'].'" style="font-size: 40px;"></i>
</div>
<div class="title text-center mb-0">
<h5>'.$card['title'].'</h5>
</div>
<div class="descricao-card text-center mb-5">
<p>'.$card['text'].'</p>
</div>
<div class="text-center">
<a href="resultexlab.php?cardexameslab='.$contador.'">
<button type="submit" class="btn btn-primary" style="background-color:#7e1d59;">Veja mais</button>
</a>
</div>
</div>
</div>
</div>';
      $contador++;
  }
?>
</div>
<?php
    include("footer.php");
    ?>
</body>
</html>