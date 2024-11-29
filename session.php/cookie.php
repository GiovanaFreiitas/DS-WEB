<?php
setcookie("usuario", "bruno", time() + 7* 24* (60*60),'/session/');
//setcookie("usuarioAntigo", "giovana", time() + 7* 24* (60*60),'/session/');

setcookie("usuarioAntigo", "giovana", -3600, '/session/');
print_r($_COOKIE);



?>