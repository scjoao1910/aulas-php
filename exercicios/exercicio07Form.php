<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação e manipulação de dados a partir de formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class = "container ">
        <h1>Exercício 7</h1>
        <hr>
<fieldset class="border p-3 rounded">
    <legend class="text-center px-2 fs-6 fw-bold ">Formulário de Cadastro de Produto</legend>
        <form action="exercicio07Process.php" method="POST">

        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante" class="form-select">
                <option value="" selected disabled></option>
                <option value="dell">Sony</option>
                <option value="microsoft">Microsoft</option>
                <option value="motorola">Nintendo</option>
                <option value="lg">Asus</option>
            </select>
        </div>

             <div class="mb-3">
            <label class="form-label" for="valor">Valor:</label>
            <input class="form-control" type="number" name="valor" id="idade" min="100" max="10000" placeholder="0.00" step="0.01" required>
        </div>

             <div class="mb-3">
            <label class="form-label" for="valor">Quantidade:</label>
            <input class="form-control" type="number" name="quantidade" id="quantidade" min="100" max="1000" placeholder="0000" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Cadastrar
        </button>

        </form>
</fieldset>
        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>