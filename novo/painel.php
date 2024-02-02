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
    <title>Controle de Acesso</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="css/painel.css">
</head>

<body>
    

        

<div class="container">

    <div class="subdiv1">
        <div class="overlay">        
            <p>Olá, <?php echo $_SESSION['nome'];?></p>
            <p>SEJA BEM VINDO!</p>

        </div>
        
   

        <?php
            if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
        ?> 
            Você possui o perfil: <br> ADMINISTRADOR <br>

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

            
            <a class="modern-button" href="https://lojaintegrada.com.br/">Acessar Loja Virtual</a>
            <br>
            <?php
                if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'ADMIN'):
            ?>                
               <a class="highlight-button" href="cadastro.php">Cadastrar novo usuário</a>
            <?php
                endif;
            ?>
            <p><a href="logout.php">Sair do sistema</a></p>
     
                
    </div>


</div>

</body>

</html>