<?php
//  Array (vetor)

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"];

?>

<?php
    $planoDeEstudos = [ 
    ["JS Avançado", "Node.js", "Next.js"],
    ["PHP", "Orientação a Objetos"],
    ["Teoria das Cores", "Photoshop com IA", "UX/UI",]
    ];
    $linhas = count($planoDeEstudos);
?>

<?php 
    $alunos = ["Zidane", "Iniesta", "Busquets", "Renato Augusto" ];

?>

<?php 
    $curso = [
    "titulo" => "Analista de desempenho e performance",
    "carga_horario" => "2000",
    "descricao" => "Aprender tudo sobre a área"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Loops para estruturas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <h1>Loops para estruturas de dados</h1>
        <hr>

        <h2>Usando o loop <code>for</code> para acessar o array</h2>
        <ol>
            <?php 
                for ($i = 0; $i < count($meses); $i++): ?>
                <li> <?= $meses[$i] ?> </li>
            <?php 
                endfor; ?>

        </ol>
        <hr><br>
        <h2>Usando o loop <code>for</code> para acessar uma matriz (array de arrays)</h2>

           <?php 
                for ($k = 0; $k < $linhas; $k++): 
                    $colunas = count($planoDeEstudos[$k]); //Acessa cada linha
                    
                     for ($j = 0; $j < $colunas; $j++): //Acessa cada coluna
            ?>

                <p> <?= $planoDeEstudos[$k][$j] ?> </p>

            <?php  
                    endfor;
                endfor;
            ?>
                <hr><br>
                <h2>Usando o loop <code>foreach</code> para arrays</h2>

                <?php 
                    foreach ($alunos as $aluno):             
                ?>
                    <p><?= $aluno?></p>
                <?php
                    endforeach;
                ?>
                <hr><br>
                <h2>Usando <code>foreach</code> para array associativo</h2>
                <?php 
                    foreach ($curso as $chave => $valor):                
                ?>
                <p><b><?=$chave?></b> : <?=$valor?></p>
                <?php 
                endforeach;

                // Extraindo somente o valor
                foreach ($curso as $valor):
                ?>
                <hr>
                <p><i><?=$valor?></i></p>

                <?php 
                endforeach;
                 ?>

                <hr><br>
                <h2>Usando o <code>foreach</code> em uma matriz</h2>
                <?php
                    foreach($planoDeEstudos as $categoria): // Cada Linha
                        foreach ($categoria as $assunto): 

                ?>
                <p><?=$assunto?></p>

                <?php 
                        endforeach;
                    endforeach;                
                ?>

        

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>