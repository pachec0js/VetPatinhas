<?php
$exames = [
    [
        'celular' => "<img src='../img/mobile/pressao_arterial.png'>",
        'imagem' => "<img src='../img/pressao_arterial.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Pressão Arterial",
        "p1" => "A mensuração da pressão arterial é crucial na Medicina Veterinária, sendo utilizada como meio auxiliar diagnóstico em doenças renais, cardíacas, endócrinas e outras. No atendimento ambulatorial e cirúrgico, monitora-se a pressão arterial para garantir adequada oxigenação dos tecidos e sucesso do tratamento.",
        "p2" => "A VetPatinhas utiliza o método não invasivo com Doppler, um exame indolor que dura poucos minutos. Para sua realização, é necessário manter o animal calmo, podendo ser indicada uma pequena tosa na região do pulso."
    ],
    [
        'celular' => "<img src='../img/mobile/eletrocardiograma.png'>",
        'imagem' => "<img src='../img/eletrocardiograma.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Eletrocardiograma Veterinário",
        "p1" => "O eletrocardiograma (ECG) veterinário é essencial para detectar arritmias e outras alterações cardíacas. Ele auxilia no diagnóstico de cardiomiopatias, valvulopatias e problemas eletrolíticos, além de doenças sistêmicas que afetam a função cardíaca.",
        "p2" => "O procedimento é simples e indolor, com eletrodos colocados em pontos específicos do corpo do animal. O exame dura cerca de 10 minutos, registrando a atividade elétrica do coração em traçados gráficos de fácil interpretação."
    ],
    [
        'celular' => "<img src='../img/mobile/holter.png'>",
        'imagem' => "<img src='../img/holter.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Holter",
        "p1" => "O exame Holter monitora a atividade elétrica do coração por 24 horas, identificando alterações que não são detectadas em exames de curta duração. É indicado para avaliação de arritmias e condições cardíacas intermitentes.",
        "p2" => "O aparelho é fixado no animal, que deve usar proteção para evitar sua remoção. Durante o período de uso, é importante monitorar a rotina do paciente e evitar contato com água. O laudo é emitido em até 15 dias úteis."
    ],
    [
        'celular' => "<img src='../img/mobile/Ultrassom.png'>",
        'imagem' => "<img src='../img/ultrassom.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Ultrassom Veterinário",
        "p1" => "O ultrassom é uma técnica não invasiva amplamente utilizada na Medicina Veterinária para avaliação de órgãos abdominais, diagnóstico gestacional e monitoramento de doenças crônicas.",
        "p2" => "O exame requer jejum alimentar de 12 horas, tosa da região a ser examinada e a contenção do animal para melhores resultados. É uma ferramenta fundamental no auxílio clínico e cirúrgico."
    ],
    [
        'celular' => "<img src='../img/mobile/ecocardiograma.png'>",
        'imagem' => "<img src='../img/ecocardiograma.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Ecocardiograma Veterinário",
        "p1" => "O ecocardiograma é um exame ultrassonográfico do coração que avalia o tamanho, função, fluxo sanguíneo e integridade das válvulas cardíacas. Ele é fundamental para diagnóstico e acompanhamento de cardiopatias.",
        "p2" => "Com o uso de Doppler, o exame possibilita análises mais detalhadas do fluxo sanguíneo. Dura aproximadamente uma hora e fornece informações essenciais para tratamentos eficazes."
    ],
    [
        'celular' => "<img src='../img/mobile/endoscopia.png'>",
        'imagem' => "<img src='../img/endoscopia_broncoscopia_rinoscopia.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Endoscopia, Broncoscopia e Rinoscopia",
        "p1" => "A endoscopia permite o diagnóstico e tratamento de patologias internas de forma não invasiva, sendo utilizada para explorar o trato digestivo, respiratório e urogenital. Imagens são capturadas em alta definição.",
        "p2" => "Esses procedimentos requerem anestesia geral e avaliação prévia do animal. A técnica é indicada para coleta de biópsias, remoção de corpos estranhos e avaliação detalhada de estruturas internas."
    ],
    [
        'celular' => "<img src='../img/mobile/tomografia.png'>",
        'imagem' => "<img src='../img/tomografia.png' class='d-block w-100' alt='...' style='margin-bottom: 60px;'>",
        "titulo" => "Tomografia Veterinária",
        "p1" => "A tomografia computadorizada (TC) é uma técnica avançada que gera imagens tridimensionais detalhadas, permitindo diagnóstico preciso de lesões, tumores e doenças ósseas e cardíacas.",
        "p2" => "O exame é indicado para avaliação de doenças neurológicas, pulmonares e pré-cirúrgicas. Ele auxilia no planejamento de tratamentos e procedimentos com maior eficácia."
    ]
];

$links = [
    [
        'links' => "Pressão arterial"
    ],
    [
        'links' => "Eletrocardiograma"
    ],
    [
        'links' => "Holter"
    ],
    [
        'links' => "Ultrassom"
    ],
    [
        'links' => "Ecocardiograma"
    ],
    [
        'links' => "Endoscopia"
    ],
    [
        'links' => "Tomografia"
    ],
];

$cardexamesimg = $_GET['cardexamesimg'];
$exame = $exames[$cardexamesimg];
$contador = 0;
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssIndex/resultservico.css">
    <link rel="shortcut icon" type="imagex/png" href="../img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>VetPatinhas | <?php echo $exame['titulo'] ?></title>
</head>

<body>
    <?php
    include("nav.php");

    echo '
<div class="banner">
   ' . $exame['imagem'] . '  
</div>
<div class="banner-mobile">
   ' . $exame['celular'] . '  
</div>
<a href="examesimg.php"><i class="fa-solid fa-arrow-left" style="color:#5f0f40;padding-left:40px;font-size:25px"></i></a>
<div class="container">
<div class="sidebar">
<ul>';
    foreach ($links as $link) {
        echo '
<li>
<a href="resulteximg.php?cardexamesimg=' . $contador . '">
<p>
                   ' . $link['links'] . '

<i class="fa-solid fa-arrow-right"></i>
</p>
</a>
</li>';
        $contador++;
    }
    echo '
</ul>
</div>
<div class="content">
<h1>' . $exame['titulo'] . '</h1>
<p>' . $exame['p1'] . '</p>
<p>' . $exame['p2'] . '</p>

<div class="horario">
    <h2>Horário de funcionamento (agendamento prévio):</h2>
    <p>Segunda a sexta, das 8h às 21h</p>
    <p>Sábado, domingo e feriados das 10h às 17h</p>
    </div>
    <p class="alerta">
                   Pedidos externos devem estar acompanhados de solicitação por escrito do Médico Veterinário.
    </p>

</div>
</div>';
    ?>


    </div>
    </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>



</div>
</div>
</div>

</body>

</html>