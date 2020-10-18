<?php
    if(isset($_POST['campo_fab'])){
        $fabricante = $_POST['campo_fab'];
        $processador = $_POST['campo_proc'];
        $memoria_ram = $_POST['campo_memoria'];
        $hd = $_POST['campo_hd'];
        $tela = $_POST['campo_tela'];
        $preco = $_POST['campo_preco'];
        $sql = "INSERT INTO dispositivos(fabricante,processador,memoria_ram,hd,tela,preco)VALUES('$fabricante','$processador','$memoria_ram','$hd','$tela','$preco')";
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