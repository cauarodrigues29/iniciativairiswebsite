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
    <title>Cadastro</title>
    <!--Page Bar-->
    <link rel="icon" type="image/jpg" href="img/Frame.svg" />
    <title>Entrar</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <img src="images/Icons/Logo.svg" alt="Iniciativa Íris Logo" height="50px">
            <p>Iniciativa Íris</p>
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
            <p>Crie a sua conta</p>

            <form action="models/Cadastro.php" method="POST">

                <Input type="text" name="nome" id="nome" placeholder="Nome">

                <Input type="email" name="email" id="email" placeholder="E-mail">

                <input type="password" name="senha" placeholder="Senha">

                <button type="submit" name="cadastrar">
                    Cadastrar
                </button>

                <div class="separation">
                    <hr id="first">
                    <div class="text">
                        ou
                    </div>
                    <hr id="second">
                </div>

                <a href="Login.php">
                    <button type="button">Voltar</button>
                </a>

                <br>

                <div>
                    <h3 style="color:red; margin-left: 7rem;">
                        <?php
                        if (isset($_SESSION['nao_nome'])) :
                        ?>
                        Preencha o seu nome!
                        <?php
                        endif;
                        unset($_SESSION['nao_nome']);
                        ?>

                        <?php
                        if (isset($_SESSION['nao_email'])) :
                        ?>
                        <script>
                        document.getElementById("nome").value = "<?php echo $_SESSION['nome']; ?>";
                        </script>
                        Preencha o seu email!
                        <?php
                        endif;
                        unset($_SESSION['nao_email']);
                        ?>
                        <?php
                        if (isset($_SESSION['nao_senha'])) :
                        ?>
                        <script>
                        document.getElementById("nome").value = "<?php echo $_SESSION['nome']; ?>";
                        document.getElementById("email").value = "<?php echo $_SESSION['email']; ?>";
                        </script>
                        Preencha a sua senha!
                        <?php
                        endif;
                        unset($_SESSION['nao_senha']);
                        ?>
                        <?php
                        if (isset($_SESSION['ja_cadastrado'])) :
                        ?>
                        <script>
                        document.getElementById("nome").value = "<?php echo $_SESSION['nome']; ?>";
                        </script>
                        <?php echo 'O endereço ' . $_SESSION['email'] . ' já está em uso na Íris. <br>Escolha outro endereço de e-mail!'; ?>
                        <?php
                        endif;
                        unset($_SESSION['ja_cadastrado']);
                        ?>
                    </h3>
                </div>
            </form>
        </main>
    </div>
</body>
</html>