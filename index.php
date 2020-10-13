<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <title>PROJETO FINAL</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
</head>
<body>
        <div class="topo">
            <div class="logo">
                <img src="JPD_logo.png" width="170px" height="170px"> 
            </div>
            <input type="search" placeholder="Pesquise aqui..." class="pesquisa">   
		    <div class="menu">
                <a href="index.php?p=cd">Cadastro de dispositivos</a>
                <a href="index.php?p=ep">Estoque e preços</a>
                <a href="index.php?p=rv">Vendas</a>
                
            </div>
        </div>
        <div class="conteudo">
            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    $pagina = 'cd';
                }
                if($pagina == 'cd'){
                    include "cadastrar_form.html";
                }elseif($pagina == 'ep'){
                    include "estoque_ver.php";
                }elseif($pagina == 'rv'){
                    include "venda_form.php";
                }
            ?>
        </div>
        <div class="rodape">

        </div>
</body>
</html>