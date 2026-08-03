<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos genéricos</title>
</head>

<body>
    <h1>Trabalhando com objetos/instâncias</h1>
    <hr>

    <?php
    // Criando um objeto/instância a patir da classe std (Standard Class)
    $usuario = new stdClass;

    //Adicionando propriedades/atributos ao objeto
    $usuario->codigo = 1;
    $usuario->nome = "Jon Oliva";
    $usuario->email = "jon@savatage.com";
    $usuario->idade = 70;
    $usuario->telefones = ["11-4002-8922", "11-91234-5678"];
    $usuario->endereco = [
        "logradouro" => "Rua XYZ",
        "numero" => "123A",
        "bairro" => "Penha",
        "cep" => "03639-000"

    ];
    $usuario->caracteristicas = new stdClass;
    $usuario->caracteristicas->peso = 80;
    $usuario->caracteristicas->altura = 1.85;

    ?>
    <h2>Análise dos dados</h2>
    <pre><?php var_dump($usuario) ?></pre>

    <h2>Acessando e exibindo os dados do objeto</h2>
    <ul>
        <li>Nome: <?= $usuario->nome  ?></li>

        <li>E-mail: <a href="mailto:<?= $usuario->email  ?>">
                <?= $usuario->email  ?></a></li>

        <li>Idade: <?= $usuario->idade ?></li>

        <li>Celular: <a href="tel:+55<?= $usuario->telefones[1] ?>">
                <?= $usuario->telefones[1] ?>
            </a>
        </li>

        <li>Bairro: <address><?= $usuario->endereco["bairro"] ?></address>
        </li> <!-- Mini Exercício -->
        <li>Peso: <?= $usuario->caracteristicas->peso ?>kg</li> <!-- Mini Exercício -->
    </ul>
    <?php
    $pedido = new stdClass;
    $pedido->numero = "123abc";
    $pedido->valor_total = 1256.42;
    $pedido->entrega = 7;

    $arrayPedido = (array) $pedido; // Casting (Conversão)
    ?>


    <h2>Converter objeto em array</h2>
    <pre><?php var_dump($pedido) ?></pre>
    <pre><?php var_dump($arrayPedido) ?></pre>



    <h2>Converter array em objeto</h2>

    <?php
    $curso = [
        "titulo" => "PHP Básico",
        "carga_horaria" => 40,
        "categoria" => "Back-End"
    ];
    $objetoCurso = (object) $curso; // Casting (Conversão)
    ?>
    <h3>Analisando a estrutura do array original e do objeto gerado</h3>
    <pre><?php var_dump($curso) ?></pre>
    <pre><?php var_dump($objetoCurso) ?></pre>
</body>

</html>