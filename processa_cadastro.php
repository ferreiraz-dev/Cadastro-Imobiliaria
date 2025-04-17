<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proprietário Cadastrado!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <main class="main-content">
            <?php 
require_once 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nascimento'];
$tipo_imovel = $_POST['tipo_imovel'];
$qtd = $_POST['quantidade_imoveis'];

$sql = "INSERT INTO proprietarios (nome, cpf, data_nascimento, tipo_imovel, quantidade_imoveis) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn -> prepare($sql);
$stmt -> bind_param("ssssi", $nome, $cpf, $data_nasc, $tipo_imovel, $qtd);

if ($stmt->execute()) {
    echo "<p>Proprietário cadastrado com sucesso!</p><br>";
    echo "<a href='cadastrar.php'>Cadastrar outro</a><a href='lista_proprietarios.php'>Ver lista</a>";
} else {
    echo "Erro: " . $stmt -> error;
}

$conn->close();

            ?>
        </main>
    </div>
</body>

</html>