<?php
include 'conexao.php';

$id = $_POST['id'];
$tipo = $_POST['tipo_imovel'];
$quantidade = $_POST['quantidade_imoveis'];

$sql = "UPDATE proprietarios SET tipo_imovel = ?, quantidade_imoveis = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $tipo, $quantidade, $id);

if ($stmt->execute()) {
    echo "Proprietário atualizado com sucesso!";
    header("Location: lista_proprietarios.php"); // redireciona após salvar
    exit;
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>