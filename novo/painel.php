<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>

Perfil do usuário: <?php echo($_SESSION['perfil']);

if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'U'):

?>
    
    <div class="field">
        <a href="cadastro.php">Cadastrar</a>
    </div>

<?php
endif;
?>
<h2><a href="logout.php">Sair</a></h2>