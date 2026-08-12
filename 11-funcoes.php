<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Trabalhando com funções</h1>
    <hr>

    <h2>Função como procedimento (ou sub-rotina)</h2>
    <p>Procedimentos não retornam nada</p>

    <?php 
        function exibirDadosDoAutor(){
            echo "<h4>Fulano de Tal</h4>";
            echo "<p>Aplicação <b>Back-End</b> como exemplo<p>";
        }
    ?>
    <h3>Chamar/Invocar a função/procedimento</h3>
    <?php exibirDadosDoAutor() ?>
    <div><?php exibirDadosDoAutor() ?></div>
    <hr>

    <h2>Função com parâmetros (ou argumentos)</h2>
    <?php 
        function somar($valor1, $valor2){
            $total = $valor1 + $valor2;
            return $total;
        }
    ?>

    <h3>Chamada/retorno da função somar</h3>
     <p>Resultados: <?=somar(10,20)?></p>


     <?php 
    //  Variável de escopo GLOBAL
        $precoProdutoA = 250;
        $precoProdutoB = 300;

    // Podemos passar valores de outras varáveis para os parâmetros de uma função.
        $resultadoProdutos = somar ($precoProdutoA, $precoProdutoB);   
    
    ?>

    <p>Resultado 4: <?=$resultadoProdutos?></p>


    <!-- Utilizando função como parte de condição de um if -->
    <?php if(somar(100,500) > 1200): ?>
        <p class="text-success">Meta atingida !</p>
    <?php else: ?>
        <p class="text-danger">Não foi desta vez !</p>
        <?php endif; ?>
    <hr>

    <h2>Função com parâmetros opcionais</h2>
    <?php 
        function exibirMensagem($mensagem, $pessoa = ""){
            return "Olá, $mensagem $pessoa";
        }
    ?>
    <p>Saudação 1: <?= exibirMensagem("Boa tarde", "Johan cruyff") ?></p>
    <p>Saudação 2: <?= exibirMensagem("Bom dia") ?></p>
    <hr>

    <h2>Função com indução de tipos de dados</h2>
    <p>Nesta abordagem, definimos tipos de dados para os parâmetros e para retorno da função.</p>
    <?php 
        function verificarNegativo(int $valor): string{
            if ($valor < 0) return "é negativo";
            return "não é negativo";
        }
    ?>
        <p>Número 10 <?= verificarNegativo(10) ?></p>
        <p>Número 10 <?= verificarNegativo(-10) ?></p>
        <!-- <p>Teste para erro: < ?= verificarNegativo("teste") ?></p> -->

        <hr>

        <h2>Função anônima (ou lambda)</h2>
        <?php // SEMPRE declare primeiro a função
            $multiplicar = function (float $valor1, float $valor2):float{
                return $valor1 * $valor2;
            }
        ?>

        <p>Exemplo: <?= $multiplicar(10,2) ?></p>

        <hr>

        <h2>Arrow function</h2>

        <?php 
            $subtrair = fn(float $valor1, float $valor2):float => $valor1 - $valor2;        
        ?>
        <p>Exemplo: <?= $subtrair(10,1) ?></p>



















        
        




     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>