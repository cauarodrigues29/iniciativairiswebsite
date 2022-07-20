<!DOCTYPE html>
<html lang="br">
<head>
    <!--Page Bar-->
    <title>Trabalhe Conosco</title>
    <link rel="icon" type="image/jpg" href="images/Icons/Logo.svg"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/Global.css">
    <link rel="stylesheet" href="css/Volunteers.css">

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
                <li><a href="Volunteers.php" id="On-Page">Trabalhe Conosco</a></li>
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
                <p id="Steps-subtitle" class="Active">Etapas</p>
                <p id="Requirements-subtitle">Requisitos</p>
                <p id="Schedule-subtitle">Cronograma</p>
                <p id="Questions-subtitle">Dúvidas</p>
            </div>
        </div>
        
        <div id="Container">
            <section id="Guide">
                <p>Nesta Seção</p>
                
                <ul>
                    <li class="On-section" id="Section-Steps" onclick="Steps('Steps')">
                        <p>Etapas</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
                    
                    <li id="Section-Requirements" onclick="Steps('Requirements')">
                        <p>Requisitos</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
    
                    <li id="Section-Schedule" onclick="Steps('Schedule')">
                        <p>Cronograma</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
    
                    <li id="Section-Questions" onclick="Steps('Questions')">
                        <p>Dúvidas</p>
                        <img src="images/Icons/white-arrow.png" height="20px">
                    </li>
                </ul>
            </section>
    
            <div id="Text">
                <div id="Steps" class="Steps Active">
                    <h2>Etapas</h2>
        
                    <p>
                        Se você se interessou pelo trabalho da iniciativa e quer nos ajudar a continuar nossas atividades, saiba que abrimos o processo seletivo para os voluntários todo o ano e as etapas são as seguintes:
                    </p>
    
                    <div class="Container">
                        <div id="Step_one" class="Step-title" onclick="Show_informations(document.getElementById('Step_one'), document.getElementById('Step_one_information'), document.querySelector('main'))">
                            <h3>1ª Etapa</h3>
                            <div class="Arrow"></div>
                        </div>
                        <div id="Step_one_information" class="Step-content">
                            <p>
                                O candidato precisar ler o edital do processo seletivo vigente e preencher o formulário de inscrição completo, caso cumpra todos os requisitos. Os dois ficarão disponíveis nessa página. Todas as inscrições são revisadas. 
                                <br>
                                <br>
                                O objetivo deste formulário é mapear os possíveis voluntários, suas motivações, paixões e dados demográficos. Tudo isso para que possamos os conhecer melhor e avaliar se a Iniciativa pode ou não ser um lugar benéfico para o candidato, assim como para entender como eles nos ajudariam a continuar as nossas atividades.
                                <br>
                                <br>
                                É nessa etapa que os portfólios são enviados, caso o candidato esteja se candidatando para um dos cargos que os exigem.
                            </p>
                        </div>
                    </div>
    
                    <div class="Container">
                        <div id="Step_two" class="Step-title" onclick="Show_informations(document.getElementById('Step_two'), document.getElementById('Step_two_information'), document.querySelector('main'))">
                            <h3>2ª Etapa</h3>
                            <div class="Arrow"></div>
                        </div>
                        <div id="Step_two_information" class="Step-content">
                            <p>
                                A etapa de entrevistas, também conhecida como conversa de alinhamento é fundamental para darmos voz e rosto para as pessoas mais engajadas com o projeto e que melhor demonstraram suas paixões e motivação no formulário de inscrição.  
                                <br><br>
                                Assim, nessa etapa os presidentes e coordenadores selecionam os participantes que apresentaram um ótimo desempenho na etapa do formulário para uma conversa de alinhamento. O principal propósito é analisar os valores do candidato e entender onde a Íris se encaixa nos seus planos.
                                <br><br>
                            
                            </p>
                        </div>
                    </div>
    
                    <div class="Container">
                        <div id="Step_three" class="Step-title" onclick="Show_informations(document.getElementById('Step_three'), document.getElementById('Step_three_information'), document.querySelector('main'))">
                            <h3>3ª Etapa</h3>
                            <div class="Arrow"></div>
                        </div>
                        <div id="Step_three_information" class="Step-content">
                            <p>
                                Os entrevistadores, presidentes e coordenadores se unem para uma avaliação final sobre aqueles selecionados para a etapa de entrevista. Em algumas reuniões todos os entrevistados são introduzidos por seu avaliador para a banca final, destacando os pontos fortes, focos de melhoria e dissonâncias com o objetivo da Iniciativa Íris. 
                                <br><br>
                                Nessa avaliação interna as decisões de atribuição de cargos é feita e o resultado enviado logo depois.
                                <br><br>
                                Assim, a última etapa para os selecionados é aceitar o cargo e se comprometer com as responsabilidades deste. Depois do aceite, basta aguardar a reunião de boas vindas com todo o time da Iniciativa Íris. 
                            </p>
                        </div>
                    </div>
    
                    <p>
                        O formulário abaixo é mantido aberto o ano inteiro como um banco de talentos. Algumas carências são identificadas conforme as atividades vão acontecendo, e quando isso ocorre, recorremos ao banco de talentos para encontrar a pessoa certa para suprir aquela necessidade. Por isso encorajamos a preenchê-lo mesmo que o processo seletivo do ano já tenha acabado.
                        <br>
                        <br>
                        Venha fazer parte da mudança conosco!
                    </p>
    
                    <div id="Button">
                        <a href="Volunteers-form.php"><button>Participe</button></a>
                    </div>
                </div>
        
                <div id="Requirements" class="Requirements">
                    <h2>Requisitos</h2>
    
                    <p>                
                        Podem  participar do nosso processo seletivo as pessoas que:
                    </p>
    
                    <br>
                    <ul>
                        <li>
                            <span>
                                Tenham 16 anos ou mais;
                            </span>
                        </li>
                        <li>
                            <span>
                                Disponham de disponibilidade de 3 a 5 horas semanais;
                            </span>
                        </li>
                        <li>
                            <span>
                                Sejam LGBTQIA+;
                            </span>
                        </li>
                        <li>
                            <span>
                                Possuam bom conhecimento na área de atuação escolhida ou facilidade de aprender;
                            </span>
                        </li>
                        <li>
                            <span>
                                Demonstrem engajamento para cumprir as tarefas designadas pelo coordenador e participar das reuniões da equipe;
                            </span>
                        </li>
                        <li>
                           <span>
                           Compromentam-se para cumprir um período de atividades, com duração de 8 meses, na Iniciativa Íris.
    
                           </span>
                        </li>
                    </ul>
    
                </div>
    
                <div id="Schedule" class="Schedule">
                    <h2>Cronograma</h2>
    
                    <br>
                    <h4>Inscrições fechadas</h4>
    
                    <p>                
                        As inscrições para voluntariado no processo seletivo de 2022 já acabaram, mas voltarão a acontecer em 2023. O cronograma será divulgado conjuntamente com o edital.
                        <br>
                        <br>
                        Caso queira ajudar a Iniciativa com o seu trabalho mesmo nesse período, preencha o formulário do banco de talentos.
                    </p>
                </div>
    
                <div id="Questions" class="Questions">
    
                    <h2>Dúvidas</h2>
    
                    <br>
                    <h4>Para participar é preciso ser uma pessoa assumida?</h4>
    
                    <p>                
                        Não. Entendemos que isso se trata de um assunto muito pessoal e que varia de caso a caso. Não queremos colocar nossa equipe e comunidade em risco, por isso não é necessário que os participantes sejam assumidos. 
                    </p>
                    <br>
                    <br> 
                    <h4>Existe limite máximo de idade?</h4>
    
                    <p>                
                        Não. O único limite de faixa etária que colocamos é o de ter pelo menos 16 anos de idade.
                    </p>
                    <br>
                    <br> <h4>Não tenho 16 anos, vocês aceitam exceções?</h4>
    
                    <p>                
                        Os casos são avaliados individualmente, mas em regra pessoas abaixo de 16 anos não são aceitas, com exceção daqueles que vem diretamente de um ciclo da Comunidade Íris. Isso acontece porque acreditamos que muitas vezes o programa oferecido na Comunidade Íris seja mais adequado para alguém de idade inferior ao limite. Dessa forma, após passar pela nossa formação, acreditamos que o jovem estará mais apto para desenvolver a função anteriormente desejada.
                    </p>
                    <br>
                    <br>
                    <h4>Para dúvidas mais específicas contate iniciativa.iris@gmail.com ou nos mande mensagem no Instagram @iniciativairis</h4>
    
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
   <script src="js/Volunteers.js"></script>
   <script src="js/Effects.js"></script>

</html>