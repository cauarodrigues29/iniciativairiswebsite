<!DOCTYPE html>
<html lang="en">
<head>
    <!--Page Bar-->
    <title>Iniciativa Íris</title>
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/Index.css">
    <link rel="stylesheet" href="css/Global.css">
    
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
                <li><a href="Index.php" id="On-Page">Início</a></li>
                <li><a href="About.php">Sobre Nós</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="Volunteers.php">Trabalhe Conosco</a></li>
                <li><a href="Donate.php">Doe</a></li>
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

       <!--  IMAGEM INICIAL -->

        <div id="Background">
            <div>
                <div id="Bg_filter"></div>
                
                <div class="Bg_content"></div>
                <span id="Img_frase">Tome uma <br> iniciativa!</span>
                <div class="Bg_content Down_bar"></div>
                <a href="Volunteers.php" id="Subscribe"><span>Faça Parte!</span></a>
            </div>
        </div>

        <!-- NÚMERO DE IMPACTADOS -->

        <div id="Numbers">
            <div>
                <p class="Pink_numbers">+30k</p>
                <p>Pessoas</p>
                <p>alcançadas</p>
            </div>
            <div>
                <p class="Pink_numbers">+50</p>
                <p>Voluntários</p>
            </div>
            <div>
                <p class="Pink_numbers">30</p>
                <p>Mentorados</p>
                
            </div>
            <div>
                <p class="Pink_numbers">5</p>
                <p>Regiões</p>
                <p>representadas</p>
            </div>
        </div>

        <!-- POSTAGENS DO INSTAGRAM -->

        <div id="Instagram">
            <div id="Ig-text">
                <h1>Iniciativa Íris</h1>
                <p>Empoderando a juventude LGBTQIA+ brasileira e lutando por um presente mais inclusivo, visamos impactar o maior número de pessoas possíveis disseminando conhecimento sobre a causa LGBTQIA+ para o público geral e oferecendo capacitação social e acadêmica, além de auxílio psicológico gratuito, para jovens LGBTQIA+.
                </p>
            </div>
            <div id="Ig-posts">
                <div>
                    <div class="High-Edge">
                        <div>
                            <img src="images/Posts/4.png" alt="">
                            <a href="https://www.instagram.com/p/CYuypS-L0hb/"></a>
                        </div>
                        <div>
                            <img src="images/Posts/5.png" alt="">
                            <a href="https://www.instagram.com/p/CY-DNxprNTt/"></a>
                        </div>
                    </div>
    
                    <div>
                        <div>
                            <img src="images/Posts/2.png" alt="">
                            <a href="https://www.instagram.com/p/CXj1uHOLSnc/"></a>
                        </div>
                        <div>
                            <img src="images/Posts/3.png" alt="">
                            <a href="https://www.instagram.com/p/CX1Gl8erNre/"></a>
                        </div>
                    </div>
    
                    <div class="Low-Edge">
                        <div>
                            <img src="images/Posts/6.png" alt="">
                            <a href="https://www.instagram.com/p/CZUagLDro3D/"></a>
                        </div>
                        <div>
                            <img src="images/Posts/1.png" alt="">
                            <a href="https://www.instagram.com/p/CXeDJehLK3i/"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Divisor">
                <div class="Divisor"></div>
            </div>
        </div>

        <!-- SOBRE A INICIATIVA -->

        <div id="About">
            <div>
                <h1>
                    Como a Iniciativa Íris trabalha?
                </h1>
            </div>

            <div id="Contour">
                    <div id="Eye"></div>
            </div>

            <div>
                <div class="Text">
                    <div>
                        <h1>INSTAGRAM</h1>
                        <div id="Instagram-icon"></div>
                    </div>

                    <p>
                        Semanalmente são lançadas três postagens sobre assuntos 
                        relevantes para o movimento LGBTQIA+. Como o foco é ultrapassar barreiras e alcançar 
                        um público fora da bolha, os conteúdos utilizam linguagem simples e engajante, passando 
                        por temas complexos como "O que fazer quando seu filho se assumir", a questões que geram 
                        dúvidas em muitos como "Qual a diferença entre Bi e Pan?" e chegando a assuntos 
                        aparentemente triviais, mas que geram ótimas oportunidades de ampliar os espaços de discussão, como a participação 
                        da Linn da Quebrada, uma travesti, no Big Brother Brasil, o maior reality show do país.
                    </p>
                </div>

                <div class="Text">
                    <div>
                        <h1>MENTORIA</h1>
                        <div id="Mentorship"></div>
                    </div>

                    <p>
                        Na mentoria, selecionamos uma comunidade de 30
                        jovens LGBTQIA+ para capacitá-los em três pilares principais: Oportunidades, Habilidades Socioemocionais e Saúde Mental. <br>No primeiro pilar capacitamos os jovens para alcançarem experiências educacionais transformadoras através de encontros temáticos. <br>No pilar de Socioemocionais estimulamos tudo que é essencial para que as emoções cotidianas presentes em desafios e vivências sejam lidadas com equilíbrio. <br>Já no pilar de saúde mental, conectamos os jovens com psicólogos voluntários para que os participantes recebam o apoio e as ferramentas necessárias para enfrentarem as adversidades de suas vidas.
                    </p>
                </div>

            </div>
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