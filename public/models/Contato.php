<?php
    // Verifica se o usuario está logado
    session_start();
    if (!isset($_SESSION['usuario']) ){
        // caso não esteja, redirecionar para a pagina de login
        header("Location: ../Index.html");        
    }

    include ("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

    $mysqli->query($sql);

    header("Location: ../Index.html"); 
?>