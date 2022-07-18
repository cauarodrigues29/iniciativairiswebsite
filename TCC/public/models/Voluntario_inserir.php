<?php
    include ("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nasc = $_POST['data_nasc'];
    $telefone = $_POST['telefone'];
    $comunidade = $_POST['comunidade'];
    $linkedin = $_POST['linkedin'];
    $pronome = $_POST['pronome'];
    $ident = $_POST['ident'];
    $sigla = $_POST['sigla'];
    $ocupacao = $_POST['ocupacao'];
    $cargo = $_POST['cargo'];
    $motivo = $_POST['motivo'];
    $experiencia = $_POST['experiencia'];
    $contato = $_POST['contato'];
    $informacoes = $_POST['informacoes'];

    $sql = "INSERT INTO voluntario 
    (nome, email, data_nasc, telefone, comunidade, linkedin, pronome, ident, sigla, ocupacao, cargo, motivo, experiencia, contato, informacoes) 
    VALUES 
    ('$nome', '$email', '$data_nasc', '$telefone', '$comunidade', '$linkedin', '$pronome', '$ident', '$sigla', '$ocupacao', '$cargo', '$motivo',
    '$experiencia', '$contato', '$informacoes')";

    $mysqli->query($sql);

    header('Location: ../Volunteers.html')
?>