<?php

//incluindo a minha conexão com o banco de dados
include_once('conexao.php');


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['quantidade'];
//inicio a inserção dos dados no banco
$sql = "INSERT INTO produtos (nome, quantidade, preco) VALUES ('$nome', '$quantidade',$preco)";
//mysquli_query = consulta 
if (mysqli_query($conexao, $sql)) {
echo "Novo registro inserido com sucesso!";
header('location: login.php');
} else {
echo "Erro ao inserir: " . mysqli_error($conexao);
}

?>