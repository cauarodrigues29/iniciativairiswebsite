<?php
 // Verifica se o usuario está logado
/*  session_start();
 if (!isset($_SESSION['usuario']) ){
     // caso não esteja, redirecionar para a pagina de login
     header("Location: form_login.php");        
 } */
?>
<form name="form_inserir_doador" method="post" action="voluntario_inserir.php">
    <h2>Cadastro de Voluntário</h2>
    <p>Nome:<br>
        <input name="nome" type="text">
    </p>
    <p>Email:<br>
        <input name="email" type="text">
    </p>
    <p>Data de nascimento:<br>
        <input name="data_nasc" type="date">
    </p>
    <p>Telefone:<br>
        <input name="telefone" type="text">
    </p>
    <p>Você fez parte da Comunidade Íris em 2021?<br>
            <input type="radio" name="comunidade" value="sim">Sim<br>
            <input type="radio" name="comunidade" value="nao">Não<br>
    </p>
    <p>LinkedIn: 
            <input name="linkedin" type="text">
    </p>
    <p>Quais são seus pronomes de preferência?<br>
        <input type="checkbox" name="pronome" value="elu/delu">Elu/delu<br>
        <input type="checkbox" name="pronome" value="ela/dela">Ela/dela<br>
        <input type="checkbox" name="pronome" value="ele/dele">Ele/dele<br>
        <input type="checkbox" name="pronome" value="outro">Outro<br>
    </p>
    <p>Como você se identifica?<br>
        <input type="radio" name="ident" value="negro">Negro<br>
        <input type="radio" name="ident" value="branco">Branco<br>
        <input type="radio" name="ident" value="pardo">Pardo<br>
        <input type="radio" name="ident" value="amarelo">Amarelo<br>
        <input type="radio" name="ident" value="indigena">Indígena<br>
        <input type="radio" name="ident" value="outro">Outro<br>
    </p>
    <p>Você faz parte de qual(is) letra(s) da sigla LGBTQIAP+?<br>
        <input type="checkbox" name="sigla" value="lesbica">Lésbica<br>
        <input type="checkbox" name="sigla" value="gay">Gay<br>
        <input type="checkbox" name="sigla" value="bissexual">Bissexual<br>
        <input type="checkbox" name="sigla" value="trans">Trans<br>
        <input type="checkbox" name="sigla" value="queer">Queer<br>
        <input type="checkbox" name="sigla" value="assexual">Assexual<br>
        <input type="checkbox" name="sigla" value="panssexual">Panssexual<br>
        <input type="checkbox" name="sigla" value="outro">Outro<br>
    </p>
    <p>Ocupação:
        <input name="ocupacao" type="text">
    </p>
    <p>Para qual(is) cargo(s) você gostaria de ser considerado? <br>
        <input type="checkbox" name="cargo" value="designer">Designer<br>
        <input type="checkbox" name="cargo" value="redator">Redator<br>
        <input type="checkbox" name="cargo" value="criador de conteudo">Criador de Conteúdo<br>
        <input type="checkbox" name="cargo" value="gerente de mentoria">Gerente de Mentoria<br>
        <input type="checkbox" name="cargo" value="gerente de comunidade">Gerente de Comunidade<br>
        <input type="checkbox" name="cargo" value="coordenador adjunto de habilidades socioemocionais">Coordenador adjunto de Habilidades Socioemocionais<br>
        <input type="checkbox" name="cargo" value="auxiliar de mentoria - oportunidades">Auxiliar de mentoria - Oportunidades<br>
        <input type="checkbox" name="cargo" value="auxiliar de mentoria - habilidades socioemocionais">Auxiliar de mentoria - Habilidades socioemocionais<br>
        <input type="checkbox" name="cargo" value="auxiliar de mentoria - saude mental">Auxiliar de mentoria - Saúde Mental<br>
        <input type="checkbox" name="cargo" value="consultor educacional - oportunidades">Consultor educacional - Oportunidades<br>
        <input type="checkbox" name="cargo" value="auxiliar de recursos humanos">Auxiliar de Recursos Humanos<br>
        <input type="checkbox" name="cargo" value="auxiliar de relacoes publicas">Auxiliar de Relações Públicas<br>
        <input type="checkbox" name="cargo" value="analista de parcerias">Analista de Parcerias<br>
        <input type="checkbox" name="cargo" value="tik toker">Tik Toker<br>
    </p>
    <p>Por que você gostaria de fazer parte da Iniciativa Íris (100-200 palavras)<br>
        <input name="motivo" type="text">
    </p>
    <p>Você já tem experiência na função almejada? Se sim, compartilhe! (200-300 palavras)<br>
        <input name="experiencia" type="text">
    </p>
    <p>Eu permito que a Iniciativa Íris utilize os dados fornecidos
        para entrar em contato comigo e conduzir o Processo Seletivo! <br>
        <input type="radio" name="contato" value="sim">Sim<br>
        <input type="radio" name="contato" value="nao">Não<br>
    </p>
    <p>Eu garanto que todas as informações disponibilizadas aqui, por mim, são verdadeiras!<br>
        <input type="radio" name="informacoes" value="sim">Sim<br>
        <input type="radio" name="informacoes" value="nao">Não<br>
    </p>
    <input name="enviar" type="submit" value="Salvar"><br><br>
    <input name="cancelar" type="reset" value="cancelar">
</form>