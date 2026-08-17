<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisando outras funções para trabalhar com datas e horários em PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1>Pesquisando outras funções para trabalhar com datas e horários em PHP</h2>
        <hr>
        <h5>Sua tarefa será pesquisar outras funções do PHP que também podem ser utilizadas para trabalhar com datas, horários e informações como dia, mês, ano, hora, minuto e segundo. </h5>

        <p><b>Funções que devem ser pesquisadas</b></p>
        <ul>
            <li><code>time()</code></li>
            <li><code>getdate()</code></li>
            <li><code>mktime()</code></li>
            <li><code>checkdate()</code></li>
        </ul>

        <dl>
            <dl><code>time()</code></dl>
            <dd>
                <?php
                $agora = time();
                ?>
                a função <code>time()</code> retorna timestamp atual (data convertida em formato númerico) ou o número de segundos desde a data de 1 de Janeiro de 1970 chamada de <em>Era Unix</em>, decisão tomada pelos desenvolvedores do sistema Unix que precisavam de uma data de referência fixa próxima ao desenvolvimento do sistema.
                Não utiliza paramêtros nesse caso mas pode receber caso queira utilizar ela para outras coisas.
            </dd>
            <dd>
                Já se passaram <?= $agora ?> segundos desde 1/1/1970
            </dd>
        </dl>
        <dl>
            <dd><code>getdate()</code></dd>
            <dd>
                Essa função serve para retornar informações detalhadas sobre uma data e hora no formato de array associativo e utilizando algumas chaves nós trazemos essas informações
                <ul>
                    <li><code>"seconds"</code>: Segundos (0 a 59)</li>
                    <li><code>"minutes"</code>: Minutos (0 a 59)</li>
                    <li><code>"hours"</code>: Horas (0 a 23)</li>
                    <li><code>"mday"</code>: Dia do mês (1 a 31)</li>
                    <li><code>"wday"</code>: Dia da semana em número (0 para Domingo até 6 para Sábado)</li>
                    <li><code>"mon"</code>: Mês em número (1 a 12)</li>
                    <li><code>"year"</code>: Ano com 4 dígitos (ex: 2026)</li>
                    <li><code>"yday"</code>: Dia do ano (0 a 365)</li>
                    <li><code>"weekday"</code>: Nome do dia da semana em inglês (ex: "Monday")</li>
                    <li><code>"month"</code>: Nome do mês em inglês (ex: "August")</li>
                    <li><code>0</code>: O timestamp Unix completo</li>
                </ul>
            </dd>
            <dd>
                <?php
                $dataAtual = getdate();
                ?>
                <p>Hoje é dia <?= $dataAtual["mday"] ?>.</p>
                <p> Agosto em inglês é <?= $dataAtual["month"] ?>.</p>
                <p>Hoje é o dia de número de <?= $dataAtual["yday"] ?> do ano de <?= $dataAtual["year"] ?></p>
            </dd>
        </dl>
        <dl>
            <dt><code>mktime()</code></dt>
            <dd>Está função contrária ao <code>time()</code> ela pega os qualquer data do passado legível para humanos e traduz de volta para a linguagem matemática da máquina</dd>
            <dd>
                <?php
                // $natal = mktime("hora","minuto","segundo","mês","dia","ano");
                $natal = mktime(20, 30, 0, 12, 25, 1970);
                ?>
                O timestamp do Natal em 1970 era de: <?= $natal ?>
                <p>Traduzindo de volta para confirmar: <?= date('d/m/Y H:i:s', $natal) ?></p>
            </dd>
        </dl>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>