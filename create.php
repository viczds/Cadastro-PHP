<?php

include './conexao.php';

$conn = getConnection();

$sql = 'INSERT INTO usuário (id,nome,email,telefone) VALUES (:id,:nome,:email,:telefone)';

$id = $_GET["id"];
$nome = $_GET ["nome"];
$email = $_GET ["email"];
$telefone = $_GET ["telefone"];

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telefone', $telefone);

if($stmt->execute())
{
    echo 'Salvo com sucesso!';
}
else
{
    echo 'Erro ao salvar!';
}


?>
