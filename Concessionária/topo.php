<?php include("css/header.php");?>

<div class="topo">
    <div>
      <p><img src="./WCM Motors.png" alt=""></p>
      <p>CONCESSIONÁRIA</p>
    </div>
    <ul class="menu">
        <a href="index.php">Inicio</a>
        <li>Adicionar
          <ul class="submenu">
             <a href="addUsuario.php">Adicionar Usuário</a>
             <a href="addCarro.php">Adicionar Carro</a>
          </ul>
        </li>
        <li>Listar
            <ul class="submenu">
              <a href="listarCarro.php">Listar Carro</a>
              <a href="listarUsuario.php">Listar Usuario</a>
            </ul>
        </li>
        <li>Pesquisar
            <ul class="submenu">
               <a href="pesquisarCarro.php">Pesquisar Carro</a>
               <a href="pesquisarUsuario.php">Pesquisar Usuário</a>
            </ul>
        </li>
        <?php
        @session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
           echo "<li class='drop'>";
           echo "<img src='{$_SESSION['foto']}' alt='Foto de perfil'>";
           echo "<div class='visible'>";
           echo "<a href='#' class='bemvindo'>Olá {$_SESSION['nome']}</a><br>";
           echo "<a href='#'>Alterar Foto</a>";
           echo "<a href='logoff.php'>Sair</a>";
           echo "</div>";
           echo "</li>";
        }else{
          echo "<a href=login.php>Entrar</a>";
        }
        ?>
    </ul>

</div>