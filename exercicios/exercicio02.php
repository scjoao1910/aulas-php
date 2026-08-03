<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2: estruturas de dados com arrays e objetos </title>
</head>
<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    html {
        font-size: 16px;
    }

    h1 {
        background-color: chocolate;
        color: azure;
        border-radius: 10px;
        display: flex;
        justify-content: center;
    }

    section {
        display: flex;
        background-color: aquamarine;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        width: 100%;
        justify-content: center;

    }

    dl {
        margin: 0;
        padding-inline: 20px;
    }
</style>

<body>
    <h1>Exercício 02: estruturas de dados com arrays e objetos</h1>
    <hr>

    <?php
    $usuario1 = new stdClass;

    $usuario1->nome = "Zé Elias";
    $usuario1->email = "superZe@corinthians.com.br";
    $usuario1->senha = "cbd95";
    $usuario1->idade = 49;
    $usuario1->sexo = "Masculinho";
    $usuario1->cidade = "Guarulhos";

    $usuario2 = [
        "nome" => "Viola",

        "email" => "viola@corinthians.com.br",

        "senha" => "cbd95",

        "idade" => 57,

        "sexo" => "Masculinho",

        "cidade" => "São Paulo"

    ];

    ?>
    <section>
        <article>
            <dl>
                <dt>⚽ Nome de usuário: <?= $usuario2["nome"] ?></dt>
                <dd>✉️ Email: <a href="mailto:<?= $usuario2["email"] ?>"><?= $usuario2["email"] ?></a></dd>
                <dd>🔞 Idade: <?= $usuario2["idade"] ?> Anos</dd>
            </dl>
        </article>
        <article>
            <dl>
                <dt>⚽ Nome de usuário: <?= $usuario1->nome ?></dt>
                <dd>✉️ Email: <a href="mailto:<?= $usuario1->email ?>"><?= $usuario1->email ?></a></dd>
                <dd>🔞 Idade: <?= $usuario1->idade ?> Anos</dd>
            </dl>
        </article>
    </section>


</body>

</html>