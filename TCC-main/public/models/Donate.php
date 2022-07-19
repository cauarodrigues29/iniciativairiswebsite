<?php
    // Verifica se o usuario está logado
    session_start();
    if (!isset($_SESSION['usuario']) ){
        // caso não esteja, redirecionar para a pagina de login
        header("Location: ../Login.php");        
    }

    include ("Conexao.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexualidade = $_POST['sexualidade'];
    $genero = $_POST['genero'];
    $pronome = $_POST['pronome'];

    $sql = "INSERT INTO doador (nome, email, idade, telefone, sexualidade, genero, pronome) VALUES ('$nome', '$email', '$idade', '$telefone', '$sexualidade', '$genero', '$pronome')";

    $mysqli->query($sql);

    header("Location: ../Donate.html");

?>