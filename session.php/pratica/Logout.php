
<?php
session_start();

// Limpa as sessões
session_unset();
session_destroy();

// Limpa os cookies
setcookie('user', 'giovana', time() - 3600, "/");
print_r($_COOKIE);
// Redireciona para a página de login
header("Location: index.php");
exit;
?>