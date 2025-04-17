<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Proprietário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <main class="main-content">
            <h2>Cadastro de Proprietário</h2>
            <form action="processa_cadastro.php" method="post">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
                <br>
                <br>
                <label for="cpf">CPF: </label>
                <input type="text" name="cpf" id="cpf" required>
                <br>
                <br>
                <label for="data_nascimento">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <br>
                <label for="tipo_imovel">Tipo de Imóvel: </label>
                <select name="tipo_imovel" id="tipo_imovel" required>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                </select>
                <br>
                <br>
                <label for="quantidade_imoveis">Quantidade de Imóveis: </label>
                <input type="number" name="quantidade_imoveis" id="quantidade_imoveis" required>
                <br>
                <br>
                <input type="submit" value="Cadastrar">
            </form>
        </main>
    </div>
</body>

</html>