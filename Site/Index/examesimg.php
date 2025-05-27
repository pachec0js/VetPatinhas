<?php
$cards = [
    [
        "icone" => "fa-solid fa-heart-circle-check", // Ícone de coração com check para pressão arterial
        "title" => "Pressão Arterial",
        "text" => "A mensuração da pressão arterial é importante na Medicina Veterinária, sendo usada para diagnóstico de doenças renais e cardíacas, entre outras."
    ],
    [
        "icone" => "fa-solid fa-wave-square", // Ícone de ondas para eletrocardiograma
        "title" => "Eletrocardiograma Veterinário",
        "text" => "O ECG veterinário é fundamental para registrar a atividade elétrica do coração, auxiliando no diagnóstico de doenças cardíacas."
    ],
    [
        "icone" => "fa-solid fa-clock", // Ícone de relógio para o Holter (monitoramento contínuo)
        "title" => "Holter",
        "text" => "O exame de Holter monitora a atividade elétrica do coração de animais por um período contínuo de 24 a 48 horas, diagnosticando problemas cardíacos."
    ],
    [
        "icone" => "fa-solid fa-radiation", // Ícone de onda sonora para ultrassom
        "title" => "Ultrassom Veterinário",
        "text" => "O ultrassom veterinário é usado para diagnosticar condições como tumores cerebrais, alterações no sistema nervoso e problemas na tireoide."
    ],
    [
        "icone" => "fa-solid fa-heart-pulse", // Ícone de coração com pulsação para ecocardiograma
        "title" => "Ecocardiograma Veterinário",
        "text" => "O ecocardiograma é usado para avaliar a função cardíaca dos animais, permitindo obter informações detalhadas sobre o coração."
    ],
    [
        "icone" => "fa-solid fa-camera", // Ícone de telescópio representando visualização interna (endoscopia, broncoscopia, rinoscopia)
        "title" => "Endoscopia/Broncoscopia/Rinoscopia",
        "text" => "Exames de endoscopia e broncoscopia são usados para diagnosticar doenças respiratórias e condições internas dos animais."
    ],
    [
        "icone" => "fa-solid fa-cube", // Ícone de cubo para tomografia (representando imagens 3D)
        "title" => "Tomografia Veterinária",
        "text" => "A tomografia é uma técnica de imagem não invasiva, ideal para examinar detalhadamente órgãos internos e diagnosticar condições específicas."
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>VetPatinhas | Exames de imagem</title>
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
<div class="icon text-center mb-3">
<i class="' . $card['icone'] . '" style="font-size: 40px;"></i>
</div>
<div class="title text-center mb-3">
<h5>' . $card['title'] . '</h5>
</div>
<div class="descricao-card text-center mb-3">
<p>' . $card['text'] . '</p>
</div>
<div class="text-center">
<a href="resulteximg.php?cardexamesimg=' . $contador . '"><button type="submit" class="btn btn-primary" style="background-color:#7e1d59 ;">Veja mais</button></a>
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