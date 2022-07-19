<?php
    $servidor= 'localhost';
    $usuario= 'root';
    $senha= '';
    $dbname= 'iris';

   $mysqli = new mysqli($servidor, $usuario, $senha, $dbname, 3307);
    if($mysqli -> error){
        die('Houve um erro: '. $mysqli -> error);
    }
?>
