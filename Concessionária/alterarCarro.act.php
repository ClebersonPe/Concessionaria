<?php
@session_start();
require('connect.php');
extract($_POST);
extract($_FILES);
$msg2 = ""; 

if($foto['size'] > 0){
    //escolher uma nova foto
    $destino = "images_carros/".md5(time().$foto['size']).".jpg";
    move_uploaded_file($foto['tmp_name'], $destino);
}

if(mysqli_query($con, "UPDATE `tb_carro` SET `modelo` = '$modelo',
`marca_carro` = '$marca',
`ano_fabricacao` = '$anoFabricacao',
`valor_carro` = '$valorCarro',
`desc_carro` = '$descricao',
`quilometragrem` = '$km',
`foto` = '$destino'
 WHERE `tb_carro` . `cod_carro` = '$codigo'; ")){
    $msg2 = "Alteração concluida com sucesso";
 }

 $_SESSION['msg2'] = $msg2;
 header("location:alterarCarro.php?cod=$codigo");





