<?php
@session_start();
require('connect.php');
extract($_POST);


if ($tabela == "carro"){
    if(mysqli_query($con, "Delete from `tb_carro` where `cod_carro` = '$codigo'")){
        echo "<p class=sucesso>Registro excluido com sucesso</p>";
    }else{
        echo "<p class=erro>Falha ao excluir o resgistro</p>";
    }
}

if ($tabela == "usuario"){
    if(mysqli_query($con, "Delete from `tb_usuario` where `codigo` = '$codigo'")){
    echo "<p class=sucesso>Registro excluido com sucesso</p>";
    }else{
        echo "<p class=erro>Falha ao excluir o resgistro</p>";
    }

}
