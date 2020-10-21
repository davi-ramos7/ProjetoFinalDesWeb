<?php
if(isset($_POST['campo_imp'])){
    $impressora = $_POST['campo_imp'];
    $preco = $_POST['campo_preco'];
    $data = $_POST['campo_data'];
    $quantidade = $_POST['campo_quant'];
    $sql = "INSERT INTO venda_imp(impressora,preco_de_venda,data,quantidade)VALUES('$impressora','$preco','$data','$quantidade')";
    $sql_2 = "UPDATE impressoras SET estoque=estoque - $quantidade WHERE id_impressoras = $impressora";
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