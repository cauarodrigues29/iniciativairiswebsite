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
    <link rel="stylesheet" href="css/Volunteers-form.css">

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

        <!-- INFORMAÇÕES DO VOLUNTÁRIO -->

        <div id="instructions">
            <h3>Dados de contato</h3>
            <img src="images/Icons/arrow.png" >
        </div>

        <div class="form">
            <form action="models/Voluntario_inserir.php" method="post">
                <div class="Show-questions" id="Section-one">
                    <label>
                        <p>Nome</p>
                        <input type="text" required name="nome">
                    </label>
                    
                    <label>
                        <p>Email</p>
                        <input type="email" required name="email">
                    </label>
                    
                    <label>
                        <p>Data de nascimento</p>
                        <input type="date" required name="data_nasc">
                    </label>
    
                    <label>
                        <p>Telefone</p>
                        <input type="tel" required name="telefone">
                    </label>
    
                    <div class="options">
                        <p>Você fez parte da Comunidade Íris em 2021?</p>
    
                        <div class="option">
                            <div>
                                <input type="radio" name="comunidade" value="Sim">
                                <p>Sim</p>
                            </div>

                            <div>
                                <input type="radio" name="comunidade" value="Não">
                                <p>Não</p>
                            </div>
                        </div>
                    </div>
    
                    <label>
                        <p>LinkedIn (Não obrigatório)</p>
                        <input name="linkedin" type="text">
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
                </div>

                <div id="Section-two">
                    <div class="options">
                        <p>Como você se identifica?</p>
    
                        <div class="option">
                            <div>
                                <input type="radio" name="ident" value="negro">
                                <p>Negro</p>
                            </div>

                            <div>
                                <input type="radio" name="ident" value="branco">
                                <p>Branco</p>
                            </div>
                        </div>

                        <div class="option">
                            <div class="option">
                                <input type="radio" name="ident" value="pardo">
                                <p>Pardo</p>
                            </div>
        
                            <div class="option">
                                <input type="radio" name="ident" value="amarelo">
                                <p>Amarelo</p>
                            </div>
                        </div>

                        <div class="option">
                            <div class="option">
                                <input type="radio" name="ident" value="indigena">
                                <p>Indígena</p>
                            </div>
        
                            <div class="option">
                                <input type="radio" name="ident" value="outro">
                                <p>Outro</p>
                            </div>
                        </div>
                    </div>

                    <div class="options">
                        <p>Você faz parte de qual(is) letra(s) da sigla LGBTQIAP+?</p>
    
                        <div class="option">
                            <div>
                                <input type="checkbox" name="sigla" value="lesbica">
                                <p>Lésbica</p>
                            </div>

                            <div>
                                <input type="checkbox" name="sigla" value="gay">
                                <p>Gay</p>
                            </div>
                        </div>

                        <div class="option">
                            <div class="option">
                                <input type="checkbox" name="sigla" value="bissexual">
                                <p>Bissexual</p>
                            </div>
        
                            <div class="option">
                                <input type="checkbox" name="sigla" value="trans">
                                <p>Trans</p>
                            </div>
                        </div>

                        <div class="option">
                            <div class="option">
                                <input type="checkbox" name="sigla" value="queer">
                                <p>Queer</p>
                            </div>
        
                            <div class="option">
                                <input type="checkbox" name="sigla" value="assexual">
                                <p>Assexual</p>
                            </div>
                        </div>

                        <div class="option">
                            <div class="option">
                                <input type="checkbox" name="sigla" value="panssexual">
                                <p>Panssexual</p>
                            </div>
        
                            <div class="option">
                                <input type="checkbox" name="sigla" value="outro">
                                <p>Outro</p>
                            </div>
                        </div>
                    </div>

                    <label>
                        <p>Ocupação atual</p>
                        <input name="ocupacao" type="text">
                    </label>

                    <label>
                        <p>Para qual(is) cargo(s) você gostaria de ser considerado?</p>
                        <select name="cargo" id="Cargos">
                            <option selected disabled value="">Selecione</option>
                            <option name="cargo" value="designer">Designer</option>
                            <option name="cargo" value="redator">Redator</option>
                            <option name="cargo" value="criador de conteudo">Criador de Conteúdo</option>
                            <option name="cargo" value="gerente de mentoria">Gerente de Mentoria</option>
                            <option name="cargo" value="gerente de comunidade">Gerente de Comunidade</option>
                            <option name="cargo" value="coordenador adjunto de habilidades socioemocionais">Coordenador adjunto de Habilidades Socioemocionais</option>
                            <option name="cargo" value="auxiliar de mentoria - oportunidades">Auxiliar de mentoria - Oportunidades</option>
                            <option name="cargo" value="auxiliar de mentoria - habilidades socioemocionais">Auxiliar de mentoria - Habilidades socioemocionais</option>
                            <option name="cargo" value="auxiliar de mentoria - saude mental">Auxiliar de mentoria - Saúde Mental</option>
                            <option name="cargo" value="consultor educacional - oportunidades">Consultor educacional - Oportunidades</option>
                            <option name="cargo" value="auxiliar de recursos humanos">Auxiliar de Recursos Humanos</option>
                            <option name="cargo" value="auxiliar de relacoes publicas">Auxiliar de Relações Públicas</option>
                            <option name="cargo" value="analista de parcerias">Analista de Parcerias</option>
                            <option name="cargo" value="tik toker">Tik Toker</option>
                        </select>
                    </label>
                </div>

                <div id="Section-three">
                    <label>
                        <p>Por que você gostaria de fazer parte da Iniciativa Íris (100-200 palavras)</p>
                        <input name="motivo" type="text">
                    </label>

                    <label>
                        <p>Você já tem experiência na função almejada? Se sim, compartilhe! (200-300 palavras)</p>
                        <input name="experiencia" type="text">
                    </label>

                    <div class="options">
                        <p>Eu permito que a Iniciativa Íris utilize os dados fornecidos
                        para entrar em contato comigo e conduzir o Processo Seletivo!</p>
    
                        <div class="option">
                            <div>
                                <input type="radio" name="contato" value="Sim">
                                <p>Sim</p>
                            </div>

                            <div>
                                <input type="radio" name="contato" value="Não">
                                <p>Não</p>
                            </div>
                        </div>
                    </div>

                    <div class="options">
                        <p>Eu garanto que todas as informações disponibilizadas aqui, por mim, são verdadeiras!</p>
    
                        <div class="option">
                            <div>
                                <input type="radio" name="informacoes" value="Sim">
                                <p>Sim</p>
                            </div>

                            <div>
                                <input type="radio" name="informacoes" value="Não">
                                <p>Não</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Button">
                    <button name="enviar" type="submit" id="Submit-button">Enviar</button>
                </div>
            </form>
        </div> 
        <div id="Buttons">

            <!-- BOTÃO DO PRIMEIRO QUESTIONÁRIO -->
            <button type="button" class="Show-btn" id="Section-one-button" onclick="Section(document.getElementById('Section-one-button'), 
            document.getElementById('Second-questionary'), document.getElementById('Section-one'), 
            document.getElementById('Section-two'))">Próximo</button>

            <!-- BOTÕES DO SEGUNDO QUESTIONARIO -->
            <div id="Second-questionary">
                <button type="button" id="Return-one-button" onclick="Section(document.getElementById('Second-questionary'), 
                document.getElementById('Section-one-button'), document.getElementById('Section-two'), 
                document.getElementById('Section-one'))">Voltar</button>
                
                <button type="button" id="Section-two-button" onclick="Section(document.getElementById('Second-questionary'), 
                document.getElementById('Submit-button'), document.getElementById('Section-two'), 
                document.getElementById('Section-three'), document.getElementById('Last-return-button'))">Próximo</button>
            </div>

            <!-- BOTÃO DE RETORNO DO ÚLTIMO QUESTIONÁRIO -->

            <button type="button" id="Last-return-button" onclick="Section(document.getElementById('Last-return-button'), 
            document.getElementById('Second-questionary'), document.getElementById('Section-three'), 
            document.getElementById('Section-two'), document.getElementById('Submit-button'))">Voltar</button>

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
                        <h3>ENDEREÇO</h3>
                        <p>
                            Rua 44, 383 - Bairro Independência
                            Aparecida de Goiânia, GO 74967-310
                        </p>
                    </div>
                    <div>
                        <h3>TELEFONE</h3>
                        <p>
                            (62) 3248-6296
                        </p>
                    </div>
                    <div>
                        <h3>EMAIL</h3>
                        <p>
                            Suporte@iniciativairis.com
                        </p>
                    </div>
                </div>
                <div id="Social-Media">
                    <div>
                        <a href="">
                            <img src="images/Icons/facebook-black.png" alt="" height="40px">
                            <p>Facebook</p>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/Icons/linkedin-black.png" alt="" height="40px">
                            <p>Linkedin</p>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/Icons/instagram-black.png" alt="" height="40px">
                            <p>Instagram</p>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/Icons/youtube-black.png" alt="" height="40px">
                            <p>Youtube</p>
                        </a>
                    </div>
                </div>
                <div id="Iniciativa">
                    <p>© 2020 por Iniciativa Íris.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

    <!-- SCRIPTS -->
    <script src="js/Volunteers.js"></script>
    <script src="js/Effects.js"></script>

</html>