<?php
@session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
    $_SESSION['msg'] = "<p class=error>Você precisa estar logado para continuar!</p>";
    header("location:login.php");
}