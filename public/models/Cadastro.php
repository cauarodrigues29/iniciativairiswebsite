<?php
    include("Conexao.php");
    
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

   
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
        //Verifica se os campos estão vazios
        if(strlen($_POST['nome']) == 0){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nao_nome']=true;
            header('Location: ../Form-cadastro.php');  
            exit();
            
        } else
        if(strlen($_POST['email']) == 0){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION["nome"]= $nome;
            $_SESSION['nao_email']=true;
            header('Location: ../Form-cadastro.php');  
            exit();
            
        } else if(strlen($_POST['senha']) == 0){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['email'] = $email;
            $_SESSION["nome"]= $nome;
            $_SESSION['nao_senha']=true;
            header('Location: ../Form-cadastro.php');  
            exit();
           
        } 
        
        else{
    
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
            
            //Consulta se o e-mail já está no registrado no banco de dados    
            $sql_code = "SELECT * FROM cadastro WHERE email = '$email'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução: " . $mysqli ->error);
    
            $quantidade = $sql_query-> num_rows;
    
            if($quantidade == 1) {
    
                $usuario = $sql_query ->fetch_assoc();
    
                if(!isset($_SESSION)){
                    session_start();
                }
            
                $_SESSION['email'] = $email;
                $_SESSION['nome']=$nome;
                $_SESSION['ja_cadastrado']=true;
                    
                header("location: ../Form-cadastro.php");
    
            }   
            else 
                if(!empty($nome) && !empty($nome) && !empty($senha)){                 
            
                        $sql="INSERT INTO cadastro(nome, email, senha) VALUES ('$nome', '$email','$senha')";
                }
                
        }
    }
    
   
    if(mysqli_query($mysqli, $sql)){
        //echo "Usuário cadastrado com sucesso";
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['usuario_cadastrado'] = true;
        header("location: ../Login.php");
    }

    else{
        echo "Erro" .mysqli_connect_error($mysqli);
    }
    mysqli_close($mysqli);
?>