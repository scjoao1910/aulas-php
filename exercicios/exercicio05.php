<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 (corrigido)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 05 (corrigido)</h1>
        <hr>
<?php 
// Dados de entrada 
$nota1 = 0.45;
$nota2 = 8;
$nota3 = 6;

function calcularMedia(float $n1, float $n2, float $n3):float {
    return ($n1 + $n2 + $n3) / 3;
}

$media = calcularMedia($nota1, $nota2, $nota3);

function verificarSituacao(float $m):string {
    if($m >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}

$resultado = verificarSituacao($media);
?>
    <h2>Resultados</h2>
    <p>Média: <?= number_format($media, 2, ",", ".") ?></p>
    <p>Situação: <?= $resultado ?></p>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>