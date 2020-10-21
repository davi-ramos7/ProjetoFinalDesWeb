<?php
    $sql = "SELECT * FROM impressoras";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_impressoras']."</td>";
            $resposta .= "<td>".$lh['fabricante']."</td>";
            $resposta .= "<td>".$lh['tipo_impressao']."</td>";
            $resposta .= "<td>".$lh['multifuncional']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "<td>".$lh['estoque']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>