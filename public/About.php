<!DOCTYPE html>
<html lang="br">
<head>
    <!--Page Bar-->
    <title>Sobre Nós</title>
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/Global.css">
    <link rel="stylesheet" href="css/About.css">

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
                <li><a href="About.php" id="On-Page">Sobre Nós</a></li>
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

        <div id="Bg_img">
            <div>
                <p>Iniciativa Íris</p>
                <div id="Circle"></div>
                <p id="History-subtitle" class="Active">Nossa História</p>
                <p id="Mission-subtitle">Missão e Valores</p>
                <p id="Partners-subtitle">Parceiros</p>
                <p id="Founders-subtitle">Fundadores</p>
            </div>
        </div>

        <div id="Container">
            <section id="Guide">
                <p>Nesta Seção</p>
                
                <ul>
                    <li class="On-section" id="Section-History" onclick="Section('History')">
                        <p>Nossa História</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
                    
                    <li id="Section-Mission" onclick="Section('Mission')">
                        <p>Missão e Valores</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
    
                    <li id="Section-Partners" onclick="Section('Partners')">
                        <p>Parceiros</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
    
                    <li id="Section-Founders" onclick="Section('Founders')">
                        <p>Fundadores</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
                </ul>
            </section>
    
            <div id="Text">
                <div id="History" class="History Active">
                    <h2>Nossa História</h2>
        
                    <p>
                        Ser uma pessoa LGBTQIA+ no Brasil não é fácil. Segundo o Grupo Gay Bahia, moramos no país que mais mata pessoas LGBTQIA+ do mundo, de acordo com o levantamento do coletivo #VoteLGBT, a taxa de depressão entre pessoas da comunidade é quatro vezes maior do que a do público geral e, ainda pelo mesmo mapeamento, a taxa de desemprego entre pessoas LGTBQIA+ é quase o dobro que o índice geral do Brasil. Além de tudo isso, o preconceito enraizado faz com que sejamos negligenciados por políticas públicas e tenhamos afeto negado e a autodepreciação incentivada. <br><br> 
                        Foi pensando nisso que cinco jovens do ensino médio, Cauã Rodrigues, Francisco Azar, Luís Gustavo Moreira, Luma Rios e Luiza Brant, decidiram iniciar um projeto que fosse fazer a diferença no presente, surgindo assim a Iniciativa Íris. 
                        
                        <br><br> Em nossa iniciativa, buscamos capacitar jovens em todas as vertentes úteis para seu desenvolvimento intrapessoal, acadêmico e profissional, buscando oferecer o conhecimento e os meios necessários para que esses jovens explorem seus interesses e sucedam nos seus objetivos. Assim, em março de 2021, a Iniciativa começou a ser idealizada e, um mês depois, outros 22 integrantes se uniram ao time para que o programa de mentoria, conteúdo do instagram e outras atividades começassem a ser organizadas e colocadas em prática.
                        <br><br>
                        Hoje já atingimos diretamente mais de 1800 pessoas, promovemos encontros com grandes lideranças políticas LGBTQIA+, realizamos nossa mentoria capacitando 30 jovens com instrumentos e conhecimento para perseguir oportunidades acadêmicas e profissionais, além de estimular o afeto, autoconhecimento e acolhimento consigo mesmos e para com outros. Ademais, ainda conectamos 43% dos jovens selecionados com psicólogos voluntários, e presenteamos um terço dos mentorados com uma vaga numa mentoria de idiomas gratuita, a <i> Wanderlust</i>.
                    </p>
                </div>
        
                <div id="Mission" class="Mission">
                    <h2>Nossa Missão e valores</h2>
    
                    <br>
                    <h4>Nossa missão:</h4>
    
                    <p>                
                        Promover o acesso à saúde mental e educação para jovens LGBTQIA+.
                    </p>
    
                    <br>
                    <h4>Nossa visão:</h4>
    
                    <p>
                        Tornar-se referência de acolhimento, conexão e desenvolvimento de jovens LGBTQIA+, visando avançar com a pauta de diversidade identitária no Brasil.
                    </p>
                </div>
    
                <div id="Partners" class="Partners">
                    <h2>Parceiros</h2>
    
                    <br>
                    <h4>Pinheiro Neto</h4>
                        <img src="images/Parceiros/PA.png" height="35%" width="40%"> </img>
                
                    <p>                
                        A Pinheiro Neto, o maior escritório de advocacia do Brasil, se uniu a Iniciativa Íris para prestar todo o apoio jurídico necessário para a formalização legal da organização como ONG. A parceria começou no início de 2021 e continua ativa até o momento.
                    </p>
    
                    <br>
                    <h4>Global Changemakers</h4>
                        <img src="images/Parceiros/global.png" height="35%" width="40%" > </img>
                    <p>
                        A Global Changemakers é uma ONG internacional que auxilia projetos liderados pelos jovens mais promissores ao redor do planeta. No mês do orgulho LGBTQIA+, junho, nossa iniciativa se juntou a Global para promover conteúdos educativos sobre a comunidade LGBTQIA+ em escala global. Além disso, nossa iniciativa ainda recebe o auxílio para a gestão de projetos e pessoas provido pela Yasmin, uma das voluntárias da Global.
                    </p>                
                    <br>
                    <h4>Universidade de São Paulo — USP</h4>
                        <img src="images/Parceiros/usp.jpg" height="35%" width="40%" > </img>
                    <p>
                        A parceria acontece através de um convênio firmado com o Instituto de Psicologia Escolar da USP. O objetivo é avaliar o impacto de um ambiente educacional não-tradicional nos jovens mentorados. Para isso, uma estagiária acompanha todo o processo de formação do currículo educacional, processos internos da Íris e depoimentos de jovens orientandos do ciclo da Comunidade Íris 2021. 
                    </p>
                </div>
    
                <div id="Founders" class="Founders">
                    <h2>Fundadores</h2>
    
                    <div>
                        <div class="Image One">
                            <img src="images/Fundadores/caua.jpeg" alt="" height="130px">
                        </div>
    
                        <div>
                            <p>Cauã Rodrigues</p>
                            <h4>Presidente e Coordenador de Relações Públicas</h4>
                        </div>
                    </div>
                    
                    <br>
    
                    <p>                
                        Cauã Rodrigues nasceu em Niterói e migrou por diversas casas e cidades 
                        até se fixar em Cabo Frio - RJ, onde estuda no IFRJ. Na iniciativa tem 
                        o papel de coordenador de Relações Públicas. Tem na sua bagagem o 
                        vice-campeonato nacional do maior torneio de debate da história do 
                        Brasil, experiência como recrutador do Prep Change, pesquisa pela FAPERJ 
                        e  aprovação na Academia de Liderança Latino-Americana (LALA) e programa 
                        de debate de Yale.
                    </p>
    
                    <div class="Space">
                        <div class="Image">
                            <img src="images/Fundadores/luiza.png" alt="" height="130px">
                        </div>
    
                        <div>
                            <p>Luiza Brant</p>
                            <h4>Presidente e Coordenadora de Recursos humanos</h4>
                        </div>
                    </div>
                    
                    <br>
    
                    <p class="Space">                
                        Luiza Brant, a fundadora mais nova da Iniciativa, tem 16 anos, é natural 
                        de Belo Horizonte - MG e hoje estuda na <i>Think Global School</i>. 
                        Atualmente, coordena o departamento de Recursos Humanos. Durante sua 
                        vida acumula atividades de impacto social e reconhecimentos internacionais, 
                        destacam-se sua posição de recrutadora no Prep Change e aprovação na 
                        Academia de Liderança Latino-Americana (LALA), programa de verão de 
                        Stanford, UWC e EMIS.
                    </p>
    
                    <div class="Space">
                        <div class="Image One">
                            <img src="images/Fundadores/francisco.png" alt="" height="130px">
                        </div>
    
                        <div>
                            <p>Francisco Azar</p>
                            <h4>Ex-presidente</h4>
                        </div>
                    </div>
                    
                    <br>
    
                    <p class="Space">                
                        Nascido e criado no Rio de Janeiro - RJ, Francisco Azar é o fundador 
                        responsável pela facilitação de eventos da iniciativa. Estudando na 
                        <i>United World College</i>, foi antes aluno do Colégio Pedro II, fundador 
                        da Modelo Intercolegial de Humaitá (Simulação da Onu) e aprovado para a 
                        Academia de Liderança Latino-Americana(LALA). Acumula reconhecimentos 
                        nacionais e internacionais pela <i>Global Citizen</i>, Brasa e 
                        <i>Peace First</i>.
                    </p>
    
                    <div class="Space">
                        <div class="Image">
                            <img src="images/Fundadores/luma.png" alt="" height="130px">
                        </div>
    
                        <div>
                            <p>Luma Rios</p>
                            <h4>Presidente e Coordenadora de Redes Sociais</h4>
                        </div>
                    </div>
                    
                    <br>
    
                    <p class="Space">                
                        Tendo migrado para várias regiões do Brasil, sua ultima estadia antes de 
                        embarcar para Noruega estudar em um dos colégios da <i>United World College
                        </i>, foi Natal - RN. Ativista política e extremamente engajada na 
                        participação da sociedade civil como forma de transformar o presente em um 
                        lugar melhor, Luma Rios, é responsável por coordenar os <i>designs</i> e 
                        time de redes sociais em conjunto com Luis.
                    </p>
    
                    <div class="Space">
                        <div class="Image One">
                            <img src="images/Fundadores/luis.png" alt="" height="130px">
                        </div>
    
                        <div>
                            <p>Luis Gustavo</p>
                            <h4>Presidente e Coordenador de Redes Sociais</h4>
                        </div>
                    </div>
                    
                    <br>
    
                    <p class="Space">                
                        Luis Gustavo Moreira nasceu e cresceu na pequena cidade do interior de 
                        Minas Gerais, Albertina. Tendo participado de projetos como o Apadrinhaê, 
                        Clube de Oportunidades Internacionais e Ciclo da Educação, hoje é 
                        responsável por coordenar a equipe de redes sociais com Luma. Seu foco 
                        maior é o conteúdo e gerência dos redatores da iniciativa.
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
    <script src="js/About.js"></script>
    <script src="js/Effects.js"></script>
    
</html>