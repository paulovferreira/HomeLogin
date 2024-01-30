<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

if(!$_SESSION['nome']) {
	header('Location: index.php');
	exit();
}