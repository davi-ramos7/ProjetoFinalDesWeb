<?php
if(isset($_POST['campo_lp'])){
    $laptop = $_POST['campo_lp'];
    $preco = $_POST['campo_preco'];
    $data = $_POST['campo_data'];
    $quantidade = $_POST['campo_quant'];
    $sql = "INSERT INTO venda_lp(laptop,preco_de_venda,data,quantidade)VALUES('$laptop','$preco','$data','$quantidade')";
    $sql_2 = "UPDATE laptops SET estoque=estoque - $quantidade WHERE id_laptops = $laptop";
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