<?php
session_start();


if (isset($_SESSION['user']) || (isset($_COOKIE['user']) && !empty($_COOKIE['user']))) {
    header("Location: dashboard.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $correctUsername = 'giovana';
    $correctPassword = '1234';

    if ($username === $correctUsername && $password === $correctPassword) {
       
        $_SESSION['user'] = $username;

        if (!empty($_POST['remember'])) {
            setcookie('user', $username, time() + (86400 * 30), "/"); // 30 dias
        }

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina de Login</title>
</head>
<body>
    
    <h1>Pagina de Login</h1>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label>
            <input type="checkbox" name="remember"> Lembrar-me
        </label>
        <br>
        <button type="submit">Login</button>
        
    </form>
</body>
</html>

