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
                <img src="JPD_logo.png" width="150px" height="150px"> 
            </div> 
		    <div class="menu">
                <ul>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu">Cadastro de dispositivos</button>
                            <div class="submenu1">
                                <a href="index.php?p=cd">Cadastrar desktop</a>
                                <a href="index.php?p=cl">Cadastrar laptop</a>
                                <a href="index.php?p=ci">Cadastrar impressora</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu">Estoque e preços</button>
                            <div class="submenu2">
                                <a href="index.php?p=dk">Desktops</a>
                                <a href="index.php?p=lp">Laptops</a>
                                <a href="index.php?p=imp">Impressoras</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.php?p=rv">Vendas</a></li>
                </ul>
            </div>
        </div>
        <div id="paginas" class="conteudo">
            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    $pagina = 'cd';
                }
                if($pagina == 'cd'){
                    include "cadastrar_desktop.html";
                }elseif($pagina == 'cl'){
                    include "cadastrar_laptop.html";
                }elseif($pagina == 'ci'){
                    include "cadastrar_impressora.html";
                }elseif($pagina == 'dk'){
                    include "estoque_ver_dk.php";
                }elseif($pagina == 'lp'){
                    include "estoque_ver_lp.php";
                }elseif($pagina == 'imp'){
                    include "estoque_ver_imp.php";
                }elseif($pagina == 'rv'){
                    include "venda_form.php";
                }elseif($pagina == 'vdk'){
                    include "venda_form_dk.php";
                }elseif($pagina == 'vlp'){
                    include "venda_form_lp.php";
                }elseif($pagina == 'vimp'){
                    include "venda_form_imp.php";
                }
            ?>
        </div>
        <div class="rodape">
            <p>Versão 1.0</p>
        </div>
</body>
</html>