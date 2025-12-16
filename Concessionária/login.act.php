<?php 
    @session_start();
    extract($_POST);
    require('connect.php');
    $destino = "";
    $msg = "";

    $usuario = mysqli_query($con, "Select * from `tb_usuario` where `email` = '$email' ");

    //var_dump($usuario); para verificar o numero de rows(linhas) se o email existir na tabela, entao row int == 1

    if($usuario->num_rows == 1){
        //usuário existe
       $usuario = mysqli_fetch_assoc($usuario);

       if(password_verify($senha, $usuario['senha'])){
        //senha correta
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['foto'] = $usuario['foto'];   
        $destino = "location:listarCarro.php";
       }else{
        //senha incorreta
        $destino = "location:login.php";
        $msg = "<p class=erro>Erro ao fazer Login, verifique sua senha</p>";
       }
    }

    $_SESSION['msg'] = $msg;
    header($destino);
