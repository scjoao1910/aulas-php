<?php
$linguagensDeProgramacao = [
    [
        "id" => 1,
        "linguagem" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "linguagem" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "linguagem" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "linguagem" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "linguagem" => "SQL",
        "descricao" => "Manipulação de Dados"
    ]
];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04: estruturas de repetição (loops) e estruturas de dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h2 class="display-2 text-center p-2">Linguagens de programação</h2>
  
    <div class="container">
        <table class="table table-bordered table-striped table-info table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Linguagem</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody>
                <!-- Regra de negócio -->
                <?php
                foreach ($linguagensDeProgramacao as $linguagens):
                ?>
                    <tr>
                        <td><?= $linguagens["id"] ?></td>
                        <td><?= $linguagens["linguagem"] ?></td>
                        <td><?= $linguagens["descricao"] ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>