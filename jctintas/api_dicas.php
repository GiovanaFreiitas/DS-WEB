<?php
header('Content-Type: application/json');
$pdo = new PDO('mysql:host=localhost;dbname=jctintas;charset=utf8','usuario','senha');
$stmt = $pdo->query("SELECT titulo, texto AS descricao, foto FROM dicas ORDER BY criado_em DESC LIMIT 6");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>