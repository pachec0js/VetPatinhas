<?php
include 'navMedicos.php';


$html = '';
$medicamentos = readAll($pdo, 'estoque');
foreach ($medicamentos as $medicamento) {
    $html .= "<tbody class='table-light' style='font-size: 10px;'>
   <tr>
    <th scope='row'> " . $medicamento['id_medicamentos'] . "</th>
    <td>" . $medicamento['nome'] . "</td>
     <td>" . $medicamento['categoria'] . "</td>
     <td>" . $medicamento['quantidade'] . "</td>
       <td>" . $medicamento['dosagem'] . "</td>
     <td>" . $medicamento['forma'] . "</td>
     <td>" . $medicamento['data_validade'] . "</td>
     <td>" . $medicamento['fornecedor'] . "</td>
     <td>" . $medicamento['ultima_compra'] . "</td>
     <td>" . $medicamento['observacoes'] . "</td>
     <td><a href='atualizaestoque.php?id=" . $medicamento['id_medicamentos'] . "'><button class='btn' style='background-color: #0f4c5c; color: white; font-size:10px'>editar</button></a></td>
    </tr>
    </tbody>";

}

?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssAdm/estoque.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>

    <div class="container">
        <div class="card col-10 " style="border-radius: 15px;">
            <div class="card-header text-white text-center"
                style="background-color: #0f4c5c; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                <h5 class="mb-0" style="padding: 10px;">Estoque de medicamentos</h5>
            </div>
            <div class="table-responsive">
                <table class="table text-center mb-0" style="border-radius: 15px;">
                    <thead class="table-light" style="font-size: 10px; ">
                        <tr>
                            <th scope="col" style="width: 3%;color: #636363;">id</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Medicamento</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Categoria</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Quantidade</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Dosagem</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Forma</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Validade</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Fabricante</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Ultima compra</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">Instruções de Armazenamento</th>
                            <th scope="col" style="width: 9,7%; color: #636363;">#</th>
                        </tr>
                    </thead>

                    <?php
                    echo $html;
                    ?>

                </table>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>