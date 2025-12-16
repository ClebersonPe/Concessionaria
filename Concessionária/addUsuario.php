<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Minha Concessionária</title>
</head>
<body>
    <?php include('topo.php');?>
    <?php require('sec.php');?>
      <h1 class="titleLogin">Adicionar Usuário</h1>
<div class="formulario user">
 <form action="addUsuario.act.php" method="post" enctype="multipart/form-data" class="form">
    <fieldset>
    <label for="nomeUsuario">Nome:</label>
    <input type="text" name="nomeUsuario" id="">

    <label for="cargo">Cargo:</label>
    <select name="cargo" id="">
        <option value="gerente">Gerente</option>
        <option value="comprador">Comprador</option>
        <option value="supervisor">Supervisor</option>
        <option value="estoquista">Estoquista</option>
        <option value="caixa">Caixa</option>
        <option value="vendedor">Vendedor</option>
    </select>

    <label for="email">Email:</label>
    <input type="email" name="email" id="">

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="">

    <label for="fileFoto">Foto:</label>
    <input type="file" name="foto" id="fileFoto">
    </fieldset>
    <div class="sub">
    <input type="submit" value="Enviar">
    <?php
          @session_start();
        if(isset($_SESSION['msg'])){
            echo "<div class=msg>";
            echo "<p>{$_SESSION['msg']}</p>";
            echo "</div>";
            unset($_SESSION['msg']);
        }
    ?>
    </div>

</form>
 </div>   
</body>
</html>