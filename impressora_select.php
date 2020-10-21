<?php
    $sql = "SELECT * FROM impressoras";
    include "conexao.php";
    $resposta = "<option value='#'>Selecione...</option>";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<option value='".$lh['id_impressoras']."'>".$lh['fabricante']." ".$lh['tipo_impressao']." ".$lh['multifuncional']." ".$lh['preco']."</option>";
        }
        echo $resposta;
    }
?>
