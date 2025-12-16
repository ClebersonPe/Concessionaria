<?php include("css/header.php");?>
<?php

require ('connect.php');
@session_start();
extract($_POST);
extract($_FILES);
$msg = ""; //vetor que armazena todas as mensagens aqui
$destino = "";

$busca = mysqli_query($con, "Select `email` from `tb_usuario` where `email` like '$email' ");

if($busca->num_rows > 0){
    $msg = "<p class=erro>Email já cadastrado!</p>"; //primeiro verifica se o email ja existe.
    $_SESSION['msg'] = $msg;
}else{
    //upload de imagem
    $senha = password_hash($senha, PASSWORD_DEFAULT);

if($foto['size'] > 0){
    $destino = "images_usuarios/".md5(time().$foto['size']).".jpg";
    move_uploaded_file($foto['tmp_name'], $destino);
}

if((strlen($nomeUsuario) > 0) && (strlen($email) > 0) && (strlen($cargo) > 0) && (strlen($senha) > 0)){
    if(mysqli_query($con,"INSERT INTO `tb_usuario` (`codigo`, `nome`, `email`, `cargo`, `senha`, `foto`) VALUES (NULL, '$nomeUsuario', '$email', '$cargo', '$senha', '$destino');")){
        $msg = "<p>Registro concluido com sucesso!</p>";
        
    } else{
        $msg = "<p>Erro ao criar registro</p>";
    }
  

} else{
    $msg = "Preencha todos os campos!";
}
}



    $_SESSION['msg'] = $msg;
    header("location:addUsuario.php");
