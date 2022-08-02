<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Page Bar-->
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg" />
    <title>Entrar</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/Global.css">
    <link rel="stylesheet" href="css/Login.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <a href="Index.php">
            <img src="images/Icons/login-arrow.png" alt="Voltar ao início" id="Return-arrow" height="2vw">
        </a>

        <div class="Container">
            <div class="Image Bg-img"></div>
            <div class="Login">

                <h2>Faça login ou registre-se em segundos</h2>

                <form action="models/Logindb.php" method="POST">
                    <Input type="email" name="email" placeholder="Email">

                    <input type="password" name="senha" placeholder="Senha">

                    <button type="submit" name="cadastrar">
                        Entrar
                    </button>

                    <div class="Divisor">
                        <hr> <div>ou</div> <hr>
                    </div>

                    <a href="Form-cadastro.php">
                        <button type="button">Cadastrar</button>
                    </a>
                </form>
                
                <br>
                <div>
                    <h3 style="color:red; margin-left: 7rem;">

                                   <?php
                        if(isset($_SESSION['nao_email'])):
                        ?>
                                    Preencha o seu email!
                                    <?php
                        endif;
                        unset($_SESSION['nao_email']);
                        ?>
                                    <?php
                        if(isset($_SESSION['nao_senha'])):
                        ?>
                                    Preencha a sua senha!
                                    <?php
                        endif;
                        unset($_SESSION['nao_senha']);
                        ?>

                                    <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                                    Usuário ou Senha errados!
                                    <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>
                                    <?php
                            if(isset($_SESSION['usuario_cadastrado'])):
                        ?>
                                    <span style="color:black">Usuário cadastrado com sucesso! Faça o seu <i>Login</i></span>
                                    <?php
                            endif;
                            unset($_SESSION['usuario_cadastrado']);
                        ?>
                    </h3>   
                </div>
            </div>
        </div>
    </main>
</body>
</html>