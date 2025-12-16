function excluir(codigo,tabela){
   var resp = confirm("Deseja excluir registro: " + codigo + "?");

    if(resp == true){
        
        $.ajax({
            type: "post",
            url: "./excluir.php",
            data: {codigo:codigo, tabela:tabela},
            success: function (response) {
                window.location.reload();
            },
             error: function (xhr, status, error) {
                console.log("Erro AJAX:", error);
                console.log("Resposta do servidor (erro):", xhr.responseText);
                alert("Erro AJAX: " + error);
            }
        });
    }
}


function pesquisar(texto, tabela){
    //console.log(texto);

    if(tabela == "tb_carro"){
        alvo = "pesquisarCarro.act.php";
    }
    
    if(tabela == "tb_usuario"){
        alvo = "pesquisarUsuario.act.php";
    }


    $.ajax({
        type: "post",
        url: alvo,
        data: {texto:texto, tabela:tabela},
        success: function (response) {
            $('#retorno').html(response);
            console.log(response)
        }
    });

}

const filho = document.querySelector('.bemvindo');
const pai = filho.parentElement;



