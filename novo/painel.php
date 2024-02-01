<?php
if (session_status() === PHP_SESSION_NONE) {
    // Verifica se a sessão ainda não foi iniciada
    session_start();
}

include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/painel.css">
</head>

<body>
    <div class='fundo'>
       

        

        <div class="container">
            <div class="subdiv1">
                <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
                <br><br>

                <?php
                        if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
                ?> 
                    <p>BEM VINDO! <br> Você possui o perfil: <br> ADMINISTRADOR</p>

                <?php
                        endif;
                ?>                    
                
                <?php
                        if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'USER'):
                ?> 
                    <p>BEM VINDO! <br> Você possui o perfil: <br> CLIENTE</p>
                <?php
                        endif;
                ?>                    

                <div>                    
                
                    <a class="highlight-button" href="cadastro.php">Cadastrar novo usuário</a>
                    <br>
                    <br>
                    <?php
                        if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
                    ?>                
                    <a class="modern-button" href="cadastro.php">Cadastrar novo usuário</a>
                    <?php
                        endif;
                    ?>
                </div>

            </div>
            <div class="subdiv2">
                <!-- Conteúdo da segunda sub-div -->
                <img src="https://i.pinimg.com/564x/e9/85/35/e98535c54c23e06c223f943fe2aea2ab.jpg" alt="Imagem" class="imagem">
                
                
            </div>
        </div>
        <h2><a href="logout.php">Sair</a></h2>

    </div>

</body>

</html>