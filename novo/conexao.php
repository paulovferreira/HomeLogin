<?php
define('HOST', '50.116.112.16:3306');
define('USUARIO', 'vitali04_root');
define('SENHA', 'QVi*09$d31m08');
define('DB', 'vitali04_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');