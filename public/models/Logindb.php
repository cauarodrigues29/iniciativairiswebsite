<?php
include('conexao.php');

if(isset($_POST['email']) && isset($_POST['senha'])) {
    
    if(strlen($_POST['email']) == 0){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['nao_email']=true;
        header('Location: ../Login.php');  
        exit();
        //echo "Preencha seu email";
    } else if(strlen($_POST['senha']) == 0){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['nao_senha']=true;
        header('Location: ../Login.php');  
        exit();
        //echo "Preencha sua senha";  
    } else{

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha';";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli ->error);

        $quantidade = $sql_query-> num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query ->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
        
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['nome'];

            header("location: ../Index.html");

        } else {
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nao_autenticado']=true;
            header('Location: ../Login.php');
            
            //echo "Falha ao logar, email ou senha incorretos";
        }
    }
}
?>