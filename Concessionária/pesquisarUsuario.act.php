<?php
    extract($_POST);

    require ('connect.php');

    $usuario = mysqli_query($con, "Select *  from `tb_usuario` where `nome` like '%$texto%'");

    while($usuarios = mysqli_fetch_assoc($usuario)){
        echo "<div class=carros>";
        echo "<div class=img><img src=$usuarios[foto]>";
        echo "</div>";
        echo "<h1>$usuarios[nome]</h1>";
        echo "<h2>$usuarios[email]</h2>";
        echo "<div class=modelo>";
        echo "<p>$usuarios[cargo]</p>";
        echo "</div>";
        echo "<div class=botao><a href=alterarCarro.php?cod=$usuarios[codigo]><button>Alterar</button></a>";
        echo "<a href=javascript:excluir($usuarios[codigo],\"usuario\")><button>Excluir</button></a>";
        echo "</div>";
        echo "</div>";
        
    };