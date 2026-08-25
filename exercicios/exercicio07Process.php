<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento do exercício 7</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Recebimento e processamento dos dados</h1>
        <hr>

        <h3>Dados</h3>
        <?php 
            // Aqui nós verificamos a requisição que veio do formuláruio pelo método "POST"
            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                $erros = [];

                // Aqui nós capturamos e limpamos os dados
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);

                // Esta captura permite casas decimais para o valor e apenas inteiros para a quantidade

                // O FILTER_FLAG_ALLOW_FRACTION serve para permitir o uso do ponto (.) como separador decimal (fração) ao filtrar números decimais no PHP.
                $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

                // Converte para os tipos matemáticos corretos para fazer a validação
                $valor = floatval($valor);
                $quantidade = intval($quantidade);

                // Aqui nós fazemos as validações baseadas nos limites min e max que eu coloquei no HTML
                if (empty($nome)) $erros[] = "O nome é obrigatório.";
                if (empty($fabricante)) $erros[] = "O fabricante é obrigatório.";
                if ($valor < 100 || $valor > 10000) $erros[] = "Valor deve estar entre 100 e 10.000.";
                if ($quantidade < 100 || $quantidade > 1000) $erros[] = "Quantidade deve estar entre 100 e 1.000.";


                // Aqui nós exibimos o erro
                if (!empty($erros)) {               
    ?>
    <div class="alert alert-danger">
            <h4>Não foi possível cadastrar:</h4>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li> <?= $erro ?> </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- IMPORTANTE: Altere 'exercicio07.html' para o nome exato do seu arquivo de formulário -->
        <a href="exercicio07Form.php" class="btn btn-warning">Voltar e corrigir</a>
    </div>
    <?php
        } else {
        ?>
        <div class="alert alert-success">
            <h4>Produto Cadastrado com Sucesso!</h4>
        </div>
        
        <!-- Usando list-group do Bootstrap para um visual limpo e alinhado -->
        <ul class="list-group mb-4">
            <li class="list-group-item"><b>Nome:</b> <?= $nome ?></li>
            <li class="list-group-item"><b>Fabricante:</b> <?= $fabricante ?></li>
            <li class="list-group-item"><b>Valor:</b> R$ <?= number_format($valor, 2, ',', '.') ?></li>
            <li class="list-group-item"><b>Quantidade:</b> <?= $quantidade ?></li>
        </ul>

        <a href="exercicio07Form.php" class="btn btn-primary">Cadastrar Novo Produto</a>
        <?php 
    }
    // Acesso negado caso o usuário não tenho usado o formulário
    } else {
    ?>
    <div class="alert alert-secondary">
        <h3>Acesso negado</h3>
        <p>Utilize o formulário para enviar os dados.</p>
        <a href="exercicio07Form.php" class="btn btn-primary">Ir para o formulário</a>
    </div>
    <?php 
    } 
    ?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>