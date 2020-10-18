<?php
    $host = "localhost";
    $usuario_banco = "root";
    $senha_banco = "";
    $banco = "petshop_bd";
    $con = mysqli_connect($host, $usuario_banco, $senha_banco, $banco);
    if (mysqli_connect_errno($con)) {
        echo "Falha ao conectar ao Banco de dados: " . mysqli_connect_error();
        Teste conexão;
    }
?>
