<?php
session_start();

setcookie('login', $_SESSION['login'], time() 24 + (60*60), '/session/');
setcookie('senha', $_SESSION['senha'], time() 24 + (60*60), '/session/');
header('location: ./dashboard.php');