<?php include("css/header.php");?>
<?php

require ('connect.php');
@session_start();
extract($_POST);
extract($_FILES);
$msg = ""; //vetor que armazena todas as mensagens aqui
$destino = "";

if($foto['size'] > 0){
    $destino = "images_carros/".md5(time().$foto['size']).".jpg";
    move_uploaded_file($foto['tmp_name'], $destino);
}

if((strlen($modelo) > 0) && (strlen($marca) > 0) && (strlen($anoFabricacao) > 0) && (strlen($valorCarro) > 0) && (strlen($descricao) > 0) && (strlen($km) > 0)){
    if(mysqli_query($con,"INSERT INTO `tb_carro` (`cod_carro`, `modelo`, `marca_carro`, `ano_fabricacao`, `valor_carro`, `desc_carro`, `quilometragrem`, `foto`) VALUES (NULL, '$modelo', '$marca', '$anoFabricacao', '$valorCarro', '$descricao', '$km', '$destino');")){
        $msg = "<p>Registro concluido com sucesso!</p>";
        
    } else{
        $msg = "<p>Erro ao criar registro</p>";
    }
  

} else{
    $msg = "Preencha todos os campos!";
}

    $_SESSION['msg'] = $msg;
    header("location:addCarro.php");
