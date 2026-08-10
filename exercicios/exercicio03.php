<?php
    // Regras de negócio

    // Idade definida
    $idade = 50;

$categoria = '';
$classeCss = '';
$valorIngresso = 0.0;

    // Estrutura condicional
    if ($idade < 12) {
    $categoria = 'Infantil';
    $classeCss = 'ingresso--infantil';
    $valorIngresso = 25.00;
} elseif ($idade < 60) {
    $categoria = 'Adulto'; 
    $classeCss = 'ingresso--adulto';
    $valorIngresso = 40.00;
} else {
    $categoria = 'Melhor Idade'; 
    $classeCss = 'ingresso--melhor-idade';
    $valorIngresso = 20.00;
}

    // Formatação da moeda
    // Função auxiliar para formatação com separador de milhar e decimais 
    function formatarMoeda(float $valor): string
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

$valorFormatado = formatarMoeda($valorIngresso);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03: condicionais e uso do PHP intercalado com HTML</title>
    <style>
        :root {
            --font-sans: system-ui, -apple-system, sans-serif;
        }

        body {
            font-family: var(--font-sans);
            background-color: #f4f6f9;
            display: flex;
            flex-direction: column; /* Alterado para empilhar o título e o cartão */
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .titulo-pagina {
            margin-bottom: 24px;
            color: #2d3748;
        }

        .ingresso-container {
            width: 100%;
            max-width: 380px;
        }

        /* Estrutura base do ingresso */
        .ingresso {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-left: 8px solid #ccc;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .ingresso:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }

        .ingresso__cabecalho {
            border-bottom: 2px dashed #e2e8f0;
            padding-bottom: 12px;
            margin-bottom: 16px;
        }

        .ingresso__cabecalho h1 {
            font-size: 1.25rem;
            margin: 0;
            color: #1a202c;
        }

        .ingresso__linha {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #4a5568;
        }

        .ingresso__destaque {
            font-weight: bold;
            color: #1a202c;
        }

        .ingresso__valor {
            font-size: 1.5rem;
            font-weight: 800;
            margin-top: 16px;
            padding-top: 12px;
            border-top: 1px solid #edf2f7;
            text-align: right;
        }

        /* Estilo por categoria */
        .ingresso--infantil {
            border-left-color: #3182ce;
            background: linear-gradient(to right, #ebf8ff 0%, #ffffff 10%);
        }

        .ingresso--infantil .ingresso__valor {
            color: #2b6cb0;
        }

        .ingresso--adulto {
            border-left-color: #dd6b20;
            background: linear-gradient(to right, #fffaf0 0%, #ffffff 10%);
        }

        .ingresso--adulto .ingresso__valor {
            color: #c05621;
        }

        .ingresso--melhor-idade {
            border-left-color: #38a169;
            background: linear-gradient(to right, #f0fff4 0%, #ffffff 10%);
        }

        .ingresso--melhor-idade .ingresso__valor {
            color: #2f855a;
        }
    </style>
</head>

<body>
    <!-- Veja: usamos PHP para definir a classe -->
<!-- O título agora coexiste corretamente com o ingresso usando flex-direction: column no body -->
    <h1 class="titulo-pagina">Sistema de Bilheteria</h1>

    <main class="ingresso-container">
        <!-- Aplicação da classe CSS usando short echo tag -->
        <article class="ingresso <?= $classeCss ?>">
            <header class="ingresso__cabecalho">
                <h1>Ingresso de Acesso</h1>
            </header>

            <div class="ingresso__linha">
                <span>Idade do cliente:</span>
                <span class="ingresso__destaque"><?= $idade ?> anos</span>
            </div>

            <div class="ingresso__linha">
                <span>Categoria:</span>
                
                <!-- A condicional agora funcionará corretamente devido ao Casing exato -->
                <?php if ($categoria === 'Melhor Idade'): ?>
                    <strong style="text-transform: uppercase;">⭐ <?= $categoria ?></strong>
                <?php else: ?>
                    <strong><?= $categoria ?></strong>
                <?php endif; ?>
            </div>

            <div class="ingresso__valor">
                <?= $valorFormatado ?>
            </div>
        </article>
    </main>

</body>

</html>