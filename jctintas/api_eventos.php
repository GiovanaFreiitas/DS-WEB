<?php
header('Content-Type: application/json');
$pdo = new PDO('mysql:host=localhost;dbname=jctintas;charset=utf8','usuario','senha');
$stmt = $pdo->query("SELECT titulo, descricao AS texto, foto FROM eventos ORDER BY data_evento DESC LIMIT 6");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>