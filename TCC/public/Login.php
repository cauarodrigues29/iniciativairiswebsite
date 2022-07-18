<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--Page Bar-->
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg" />
    <title>Entrar</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/Register_info.css">
    <link rel="stylesheet" href="css/Login.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class='container'>

        <header>
            <a href="Index.html">
                <img src="images/Icons/Logo.svg" alt="Iniciativa Íris Logo" height="50px">
                <p>Iniciativa Íris</p>
            </a>
        </header>

        <!-- BG IMAGE-->
        <div id="bg">
            <div id="image"></div>
            <div class="ball center"></div>
            <div class="ball small_center"></div>
            <div class="ball top"></div>
            <div class="ball bottom"></div>
        </div>

        <!-- MAIN CONTENT-->
        <main>
            <p>Entre para a íris</p>

            <form action="models/Logindb.php" method="POST">

                <Input type="email" name="email" placeholder="Email">

                <input type="password" name="senha" placeholder="Senha">

                <button type="submit" name="cadastrar">
                    Entrar
                </button>

                <div class="separation">
                    <hr id="first">
                    <div class="text">
                        ou
                    </div>
                    <hr id="second">
                </div>

                <a href="Form-cadastro.php">
                    <button type="button">Cadastrar</button>
                </a>

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
            </form>
        </main>
    </div>
</body>

</html>