<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas: números, data e hora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Funções nativas: números, data e hora</h1>
        <hr>
        <h2>Números</h2>
        <h3>max() e min()</h3>
        <p>Maior valor na lista passada:
            <?= max(10, -5, 12, 150, 0, 1236.45) ?>
        </p>
        <p>Menor valor na lista passada:
            <?= min(10, -5, 12, 150, 0, 1236.45) ?>
        </p>
        <?php
        $listaDeNumeros = [2, 10, 1000, 435, 0, -2];
        ?>
        <p>Maior valor existente no array:
            <?= max($listaDeNumeros) ?>
        </p>
        <p>Menor valor existente no array:
            <?= min($listaDeNumeros) ?>
        </p>


        <h3>round(), ceil(), floor(), rand()</h3>
        <!-- round(): Varia conforme o valor -->
        <p>Arrendondamento: <b><?= round(4.7) ?></b></p>
        <p>Arrendondamento: <b><?= round(4.2) ?></b></p>
        <p>Arrendondamento: <b><?= round(4.5) ?></b></p>
        <p>Arrendondamento para CIMA: <b><?= ceil(4.2) ?></b></p>
        <p>Arrendondamento para BAIXO: <b><?= floor(4.9) ?></b></p>


        <h3>number_format()</h3>

        <?php
        $preco = 10567.86;
        $numeroComMuitasCasasDecimais = 1458.4567123;
        ?>
        <p>Preço formatado:
            <b><?= number_format($preco, 2, ",", ".") ?></b>
        </p>
        <p>
            <?= number_format($numeroComMuitasCasasDecimais, 3) ?>
        </p>
        <hr>

        <h2>Data e Hora</h2>
        <h3>date(), date_default_timezone_set(), strtotime()</h3>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $dataHora = date("d/m/Y H:i:s");
        ?>
        <p>Data: <?= $data ?></p>
        <p>Hora: <?= $hora ?></p>
        <p>Data e hora: <?= $dataHora ?></p>

        <?php
        $dataFormatoBD = "2020-09-11";

        /* Usamos strtotime para converter primeiro, a data
             em um timestamp (data em formato numérico). Em 
             seguida, o date aplica o formato desejado.*/
        $dataFormatada = date("d/m/Y", strtotime($dataFormatoBD));
        ?>

        <p>Data (em formato de sistema/banco): <?= $dataFormatoBD ?></p>
        <p>Data (convertida e formatada): <?= $dataFormatada ?></p>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>