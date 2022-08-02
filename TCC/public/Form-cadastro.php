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

                <h2>Crie a sua conta</h2>

                <form action="models/Cadastro.php" method="POST">
                    <Input type="text" name="nome" id="nome" placeholder="Nome">

                    <Input type="email" name="email" id="email" placeholder="E-mail">

                    <input type="password" name="senha" placeholder="Senha">

                    <button type="submit" name="cadastrar">
                        Cadastrar
                    </button>

                    <div class="Divisor">
                        <hr> <div>ou</div> <hr>
                    </div>

                    <a href="Login.php">
                        <button type="button">Voltar</button>
                    </a>
                </form>

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
            </div>
        </div>
    </main>
</body>
</html>