<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 v2 desafios (corrigido)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Exercício 05 v2 desafios (corrigido)</h1>
        <hr>
<?php 
function calcularMedia(float $n1, float $n2, float $n3):float {
    return ($n1 + $n2 + $n3) / 3;
}

function verificarSituacao(float $m):string {
    if($m >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}

$alunos = [
    [
        "nome" => "Guilherme",
        "nota1" => 9,
        "nota2" => 7,
        "nota3" => 10
    ],
    [
        "nome" => "Gabriel",
        "nota1" => 4,
        "nota2" => 0,
        "nota3" => 9.9
    ],
    [
        "nome" => "Renan",
        "nota1" => 7.8,
        "nota2" => 4.5,
        "nota3" => 7.2
    ]
];

?>
    <h2>Resultados</h2>
<?php 
foreach($alunos as $aluno): 
    $media = calcularMedia($aluno["nota1"], $aluno["nota2"], $aluno["nota3"]);
    $resultado = verificarSituacao($media);
    $classe = $resultado === "aprovado" ? "bg-success" : "bg-danger";
?>    
    <p>Aluno: <?= $aluno['nome'] ?></p>
    <p>Média: <?= $media ?></p>
    <p class="<?= $classe ?>">Resultado: <?= $resultado ?> </p>
    <hr>
<?php 
endforeach;
?>    


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>