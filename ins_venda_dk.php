<?php
if(isset($_POST['campo_dk'])){
    $desktop = $_POST['campo_dk'];
    $preco = $_POST['campo_preco'];
    $data = $_POST['campo_data'];
    $quantidade = $_POST['campo_quant'];
    $sql = "INSERT INTO venda_dk(desktop,preco_de_venda,data,quantidade)VALUES('$desktop','$preco','$data','$quantidade')";
    $sql_2 = "UPDATE desktops SET estoque=estoque - $quantidade WHERE id_desktops = $desktop";
    include "conexao.php";
    if (mysqli_query($con, $sql) && mysqli_query($con, $sql_2)) {
        mysqli_close($con);
        echo "Ok";
    }else{
        echo "Erro: " . $sql . "<br>" . mysqli_error($con);
    } 
}else{
    echo "erro";
}
?>