<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Arrays</title>

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Funções nativas para Arrays</h1>
        <hr>
        <h2><code>implode()</code></h2>
        <p>Transforma array em uma string</p>

        <?php 
            $arrayBandas = ["Pink Floyd","Genesis","Yes"];
            $textoBandas = implode("-", $arrayBandas);   
        ?>
        <pre><?php var_dump($arrayBandas) ?></pre>
        <pre><?php var_dump($textoBandas) ?></pre>

        <hr>

        <h2><code>extract</code></h2>
        <p>Extrai chaves associativas para variáveis</p>
        <?php 
            $nome = "Beltrano";


            $aluno = ["id"=>1,"nome"=>"Fulano","idade"=>25];
            extract($aluno, EXTR_PREFIX_ALL,"chave");  

            /* Usamos o segundo parâmetro para definir um prefixo para os nomes.
             Isso evita conflito/sobreescrita de outras variáveis.
            */
        ?>
        <ul>
            <li>Id: <?= $chave_id ?></li>
            <li>Nome: <?= $chave_nome ?></li>
            <li>Idade: <?= $chave_idade ?></li>
        </ul>
        <p>Variável <code>$nome</code> <?= $nome?></p>

        <hr>
        <h2><code>array_sum()</code></h2>
        <p>Somando os valores de um array</p>
<?php 
    $carrinhoDeCompras = [
        "TV_led" => 5000,
        "Ultrabook" => 9000,
        "Geladeira" => 5500
    ];
    $total = array_sum($carrinhoDeCompras);
?>

    <p>Total: <?=$total?></p>
    <hr>

    <h2><code>array_unique()</code></h2>
    <p>Gera um novo array removendo elementos duplicados/repetidos em um array</p>
    <?php 
        $categorias = ["Eletrônicos","Livros","Roupas","Games","Eletrônicos"];
    
        $categoriasUnicas = array_unique($categorias);
    ?>

    <pre><?php var_dump($categorias) ?></pre>
    <pre><?php var_dump($categoriasUnicas) ?></pre>
    <hr>

        <h2><code>array_merge()</code></h2>
        <p>Junta dados de arrays diferentes.</p>
        
        <?php 
            $produtosFilialNorte = ["Mouse","Teclado"];
            $produtosFilialSul = ["Monitor","Webcam","Pendrive","Teclado"];

            // $produtos = array_merge($produtosFilialNorte,$produtosFilialSul);    

            // Podemos combinar funções de array (abaixo, merge e depois o unique)
            $produtos = array_unique(array_merge($produtosFilialNorte, $produtosFilialSul));
        ?>
        <pre><?php var_dump($produtos) ?></pre>
        <hr>

        <h2><code>array_combine()</code></h2>
        <p>Cria um novo array a partir de uma lista de valores e uma lista de chaves.</p>
        <?php 
        // Lista de chave
            $games = ["Super_Mario", "Sonic", "Final_Fantasy"];
            $precos = [99,50,129];
            $catalogo = array_combine($games, $precos);
        ?>
        <pre><?php var_dump($catalogo) ?></pre>

        <hr>


        <h2><code>array_map()</code></h2>

        <p>Percorre cada elemento de um array, executa uma função (chamada de callback) e gera um novo array com os resultados.</p>

        <?php
            $catalogoComDesconto = array_map(function(float $preco): float {
                return $preco - $preco*0.10;
            }, $catalogo);
        ?>
        <pre><?php var_dump($catalogoComDesconto) ?></pre>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>