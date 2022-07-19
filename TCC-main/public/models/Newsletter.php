<?php
    // Verifica se o usuario está logado
    session_start();
    if (!isset($_SESSION['usuario']) ){
        // caso não esteja, redirecionar para a pagina de login
        header("Location: ../Index.html");        
    }

    include ("conexao.php");

    $email = $_POST['email'];

    $sql = "INSERT INTO newsletter (email) VALUES ('$email')";

    $mysqli->query($sql);

    header("Location: ../Index.html"); 
?>