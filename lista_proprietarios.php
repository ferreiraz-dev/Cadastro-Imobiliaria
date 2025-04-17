<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proprietários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="tabela-container">
        <main class="main-content">
            <?php 
require_once 'conexao.php';

$result = $conn->query("SELECT * FROM proprietarios");

echo "<h2>Lista de Proprietários</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th><th>Nome</th><th>CPF</th><th>Nascimento</th>
        <th>Tipo de Imóvel</th><th>Qtd</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['cpf']}</td>
            <td>{$row['data_nascimento']}</td>
            <td>{$row['tipo_imovel']}</td>
            <td>{$row['quantidade_imoveis']}</td>
            </tr>";
}

            echo "</table><br><a href='cadastrar.php'>Cadastrar novo</a>";

            $conn->close();

            ?>

        </main>
    </div>
</body>

</html>