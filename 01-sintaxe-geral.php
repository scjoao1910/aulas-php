<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    
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

<script>

    const tituloH1 = document.querySelector('h1');
    tituloH1.addEventListener("click", function(){


    // O conteúdo do alert foi gerado via PHP
    alert("<?php echo "Olá PHP e JavaScript !"; ?>");

    });

</script>
 
    
</body>
</html>