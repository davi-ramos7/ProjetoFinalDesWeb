$(document).ready(function(){

    $('#paginas').on('submit','#formCadastro',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_dispositivo.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "Ok"){
                    $('#formCadastro').each(function(){
                        this.reset();
                    });
                    alert("O dispositivo foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#paginas').on('click','#btn_bscCliente',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_cliente.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblCliente').html(response);
            }
        });
    });

    $('#paginas').on('focus','#cmpNm',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "cliente_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm').html(response);
            }
        });
    });

});