<?php
    if(isset($_POST['campo_fab'])){
        $fabricante = $_POST['campo_fab'];
        $processador = $_POST['campo_proc'];
        $memoria_ram = $_POST['campo_memoria'];
        $hd = $_POST['campo_hd'];
        $preco = $_POST['campo_preco'];
        $estoque = $_POST['campo_estoque'];
        $sql = "INSERT INTO desktops(fabricante,processador,memoria_ram,hd,preco,estoque)VALUES('$fabricante','$processador','$memoria_ram','$hd','$preco','$estoque')";
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