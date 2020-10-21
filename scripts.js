$(document).ready(function(){

    $('#paginas').on('submit','#formCadastro_dk',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_desktop.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formCadastro_dk').each(function(){
                        this.reset();
                    });
                    alert("O dispositivo foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('submit','#formCadastro_lp',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_laptop.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formCadastro_lp').each(function(){
                        this.reset();
                    });
                    alert("O dispositivo foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('submit','#formCadastro_imp',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_impressora.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formCadastro_imp').each(function(){
                        this.reset();
                    });
                    alert("O dispositivo foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('click','#busca_dk',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_desktop.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblDk').html(response);
            }
        });
    });

    $('#paginas').on('click','#busca_lp',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_laptop.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblLp').html(response);
            }
        });
    });

    $('#paginas').on('click','#busca_imp',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_impressora.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblImp').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpDk',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "desktop_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpDk').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpImp',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "impressora_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpImp').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpLp',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "laptop_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpLp').html(response);
            }
        });
    });

    $('#paginas').on('submit','#formVenda_dk',function(e){
        e.preventDefault();
        var formVenda = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda_dk.php",
            data: formVenda,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formVenda_dk').each(function(){
                        this.reset();
                    });
                    alert("A venda foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('submit','#formVenda_lp',function(e){
        e.preventDefault();
        var formAnimal = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda_lp.php",
            data: formAnimal,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formVenda_lp').each(function(){
                        this.reset();
                    });
                    alert("A venda foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('submit','#formVenda_imp',function(e){
        e.preventDefault();
        var formAnimal = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda_imp.php",
            data: formAnimal,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formVenda_imp').each(function(){
                        this.reset();
                    });
                    alert("A venda foi inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

});