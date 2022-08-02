<?php
    // Verifica se o usuario está logado
    session_start();
    if (!isset($_SESSION['usuario']) ){
        // caso não esteja, redirecionar para a pagina de login
        header("Location: ../Login.php");        
    }
    include ("conexao.php");
    

    $sql = "SELECT * FROM doacao";

    if ($result = $mysqli -> query ($sql)){
        while ($row = $result -> fetch_assoc()){
            echo "Nome: ". $row["nome"]."<br> <br>";
        }
        $result -> close();
    }
    $mysqli -> close();
?> 