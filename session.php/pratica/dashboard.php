<?php
session_start();
?>

// Verifica se o usuário está logado
if (!isset($_SESSION['user']) && (!isset($_COOKIE['user']) || empty($_COOKIE['user']))) {
    header("Location: login.php");
    exit;
}

$user = isset($_SESSION['user']) ? $_SESSION['user'] : $_COOKIE['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($user); ?>!</h1>
    <p>Esta é a sua página de dashboard.</p>
    <a href="logout.php">
      <button>logout</button></a>
      <button type="submit">salvar</button>
</body>
</html>