<!DOCTYPE html>
<html lang="br">
<head>
    <!--Page Bar-->
    <title>Doe</title>
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/Global.css">
    <link rel="stylesheet" href="css/Donate.css">

    <!-- FONTS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <header>
        <div>
            <a href="Index.php">
                <image src="images/Icons/Logo.svg" alt="logo íris" height="47px">
            </a>
            <a id="Project-name" href="Index.php">
                Iniciativa Íris
            </a>
        </div>
        <nav>
            <div id="Menu">
                <li><a href="Index.php">Início</a></li>
                <li><a href="About.php">Sobre Nós</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Volunteers.php">Trabalhe Conosco</a></li>
                <li><a href="Donate.php" id="On-Page">Doe</a></li>
            </div>

            <div id="Menu-Mobile" onclick="MenuMobile()">
                <span id="Hamburguer"></span>
            </div>

            <div id="Login">
                <a href="Login.php">
                    <img src="images/Icons/login.png" alt="" height="30px">
                </a>
            </div>
        </nav>
    </header>
    
    
    <main>
        
        <!-- MENU MOBILE -->
        <div id="Nav">
            <ul>
                <li><a href="Index.php">Início</a></li>
                <li><a href="About.php">Sobre Nós</a></li>
                <li><a href="Blog.php" id="On-Page">Blog</a></li>
                <li><a href="Volunteers.php">Trabalhe Conosco</a></li>
                <li><a href="Donate.php">Doe</a></li>
            </ul>
        </div>
        
        <!-- INFORMAÇÕES DO DOADOR -->
        <div id="instructions">
            <h3>Dados de contato</h3>
            <img src="images/Icons/arrow.png" >
        </div>

        <div class="form donate">
            <form name="form_inserir_doador" method="post" action="models/Donate.php">
                <label>
                    <p>Nome</p>
                    <input type="text" required name="nome">
                </label>

                <label>
                    <p>Idade</p>
                    <input type="number" required name="idade">
                </label>

                <label>
                    <p>Email</p>
                    <input type="email" required name="email">
                </label>

                <label>
                    <p>Sexualidade</p>
                    <input type="text" required name="sexualidade">
                </label>

                <label>
                    <p>Identidade de Gênero</p>
                    <input type="text" required name="genero">
                </label>

                <label>
                    <p>Telefone</p>
                    <input type="text" required name="telefone">
                </label>
                
                <div class="options">
                    <p>Quais são seus pronomes de preferência?</p>

                    <div class="option">
                        <div>
                            <input type="radio" name="pronome" value="ela/dela">
                            <p>Ela/dela</p>
                        </div>

                        <div>
                            <input type="radio" name="pronome" value="ele/dele">
                            <p>Ele/dele</p>
                        </div>
                    </div>

                    <div class="option">
                        <div class="option">
                            <input type="radio" name="pronome" value="elu/delu">
                            <p>Elu/delu</p>
                        </div>
    
                        <div class="option">
                            <input type="radio" name="pronome" value="outro">
                            <p>Outro</p>
                        </div>
                    </div>
                </div>

                <div id="Button">
                    <button name="enviar" type="submit" id="Submit-button">Enviar</button>
                </div>
            </form>
        </div>       
    </main>
    
    <!-- RODAPÉ -->

    <footer>
        <div id="Mail_letter">
            <h1>FAÇA PARTE!</h1>
            <p>Fique por dentro de todas as novidades!</p>
            <form name="form_newsletter" method="post" action="models/Newsletter.php">
                <div>
                    <input name="email" type="email" placeholder="Insira seu email aqui*" required>
                    <button type="submit">Participar</button>
                </div>
            </form>
        </div>

        <div>
            <div id="User-Contact">
                <form name="form_mensagem" method="post" action="models/Contato.php">
                    <h1>Entre em contato</h1>
                    <p>
                        Entre em contato conosco através deste rápido formulário! Basta preencher os dados 
                        e deixar sua mensagem que retornaremos o mais rápido possível
                    </p>
        
                    <label for="">Nome</label>
                    <input type="text" name="nome" required>
        
                    <label for="">Email</label>
                    <input type="email" name="email" required>
        
                    <label for="">Telefone</label>
                    <input type="tel" name="telefone" required>
        
                    <label for="">Deixe sua mensagem aqui...</label>
                    <input type="text" name="mensagem" required>
        
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div>
                <div id="Our-Contact">
                    <div>
                        <h3>TELEFONE</h3>
                        <p>
                            (22) 98822-5329
                        </p>
                    </div>
                    <div>
                        <h3>EMAIL</h3>
                        <p>
                            iniciativa.iris@gmail.com
                        </p>
                    </div>
                </div>
                <div id="Social-Media">

                    <div>
                        <a href="https://www.linkedin.com/company/74498578/admin/">
                            <img src="images/Icons/linkedin-black.png" target="_blank" alt="Letras I e N representando a logo do Linkedin" height="40px">
                            <p>Linkedin</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/iniciativairis/" target="_blank">
                            <img src="images/Icons/instagram-black.png" alt="Imagem de uma câmera fotográfica em preto e branco, Logo do instagram" height="40px">
                            <p>Instagram</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCICrIfWH9PtZJhLHiIo09rw">
                            <img src="images/Icons/youtube-black.png" alt="Placa em formato retangular com um triangulo com a ponta apontada para a direita no centro. Símbolo do YouTube" height="40px">
                            <p>Youtube</p>
                        </a>
                    </div>
                </div>
                <div id="Iniciativa">
                    <p>© 2022 por Iniciativa Íris.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

    <!-- SCRIPTS -->
    <script src="js/Effects.js"></script>

</html>