<?php
    if(isset($_POST['campo_fab'])){
        $fabricante = $_POST['campo_fab'];
        $tipo_impressao = $_POST['campo_impressao'];
        $multifuncional = $_POST['campo_mult'];
        $preco = $_POST['campo_preco'];
        $estoque = $_POST['campo_estoque'];
        $sql = "INSERT INTO impressoras(fabricante,tipo_impressao,multifuncional,preco,estoque)VALUES('$fabricante','$tipo_impressao','$multifuncional','$preco','$estoque')";
        include "conexao.php";
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            echo "Ok";
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($con);
        }

    }else{
        echo "erro";
    }
?>