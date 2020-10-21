<?php
    $sql = "SELECT * FROM laptops";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_laptops']."'>".$lh['fabricante']." ".$lh['processador']." ".$lh['memoria_ram']." ".$lh['hd']." ".$lh['tela']." ".$lh['preco']."</option>";
        }
        echo $resposta;
    }
?>
