<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>

    <!-- O nosso CSS/Estilo próprio sempre vir por último -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- CSS INTERNO -->
    <style>
        .exemplo {
            border: solid 4px;
            padding: 4px;

            /* Propriedade CSS cujo valor vem de um processamento PHP */
            color: <?php echo "orange"; ?>;
        }
    </style>


</head>
<body>
<h1 class=exemplo>Trabalhando com PHP</h1>
<hr>
<?php
// Geração de textos/string
echo "Estou estudando a linguagem PHP para Back-end ";
echo "Este também é um texto/string";


//Geração de tags/atributos HTML
echo "<p>Este é um parágrafo gerado via PHP</p>";


//Geração de tags com atributo

//Apas simples fora e dupla dentro
echo '<p><abbr title="HyperText Preprocessor">PHP</abbr> é uma linguagem popular</p>';

//Apas dupla fora e simples dentro
echo "<p><abbr title='HyperText Preprocessor'>PHP</abbr> é uma linguagem popular</p>";

// Aspas dupla fora, aspas dupla com escape "\" dentro
echo "<p><abbr title=\"HyperText Preprocessor\">PHP</abbr> é uma linguagem popular</p>";

?>
<!-- Para o JS também, o nosso sempre tem que vir por último -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<script>

    const tituloH1 = document.querySelector('h1');
    tituloH1.addEventListener("click", function(){


    // O conteúdo do alert foi gerado via PHP
    alert("<?php echo "Olá PHP e JavaScript !"; ?>");

    });

</script>
 
    
</body>
</html>