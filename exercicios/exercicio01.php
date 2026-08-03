<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>

    <style>
        body{background-color:gray}
        .aluno{color:blue;}
        .dia{color:yellow;}
        .curso{color:red;}
        .horas{color:green;}


    </style>
</head>
<body>
    <h1>Exercício 01: uso de variáveis e/ou constantes PHP e integração com HTML</h1>

    <?php
    $data = "29/07/2026";
    const NOMEDEUMAPESSOA = "Hulk";
    const CURSO = "Vingadores";
    $cargaHoraria = 10000000;
    $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <p>O aluno <span class = aluno><?=NOMEDEUMAPESSOA?></span> no dia <span class = dia><?=$data?></span> começou o curso de graduação em serviços públicos para os <span class = curso><?=CURSO?></span> com carga horária de <span class = horas><?=$cargaHoraria?></span> e limite de faltas de <span class = falta><?=$limiteFaltas?></span> horas no total</p>

    <?php 
    $teste = "teste";
    echo $teste
    ?>
</body>
</html>