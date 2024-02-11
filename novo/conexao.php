<?php
define('HOST', '162.241.2.151:3306');
define('USUARIO', 'semij059_root');
define('SENHA', 'kxgH8801#');
define('DB', 'semij059_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');