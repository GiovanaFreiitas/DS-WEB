<?php
session_start();

if(empty($_SESSION['nome']));
echo 'nome do usuario:'.$_SESSION['nome'].'<br>';


?>