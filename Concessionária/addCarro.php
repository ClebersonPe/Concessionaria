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
<div class="formulario">
 <form action="addCarro.act.php" method="post" enctype="multipart/form-data" class="form">
    <fieldset>
    <input type="hidden" name="codigo" value="<?php echo $carros['cod_carro'] ?>">
    <input type="hidden" name="fotos" value="<?php echo $carros['foto'] ?>">
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="">

    <label for="marca">Marca:</label>
    <select name="marca" id="">
        <option value="Volkswagen">Volkswagen</option>
        <option value="Chevrolet">Chevrolet</option>
        <option value="Renault">Renault</option>
        <option value="Honda">Honda</option>
        <option value="Fiat">Fiat</option>
        <option value="Bmw">Bmw</option>
        <option value="Volvo">Volvo</option>
        <option value="Nissan">Nissan</option>
    </select>

    <label for="anoFabricacao">Ano de Fabricação:</label>
    <input type="text" name="anoFabricacao" id="">

    <label for="valorCarro">Valor do Carro:</label>
    <input type="number" name="valorCarro" id="">

    <label for="descricao">Descrição do Carro:</label>
    <textarea name="descricao" id="" cols= "30" rows = "9"></textarea>

    <label for="km">Quilometragem:</label>
    <input type="number" name="km" id="">

    <label for="fileFoto">Foto:</label>
    <input type="file" name="foto" id="fileFoto">
    </fieldset>
    <div class="sub">
    <input type="submit" value="Enviar">
    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p>{$_SESSION['msg']}</p>";
            unset($_SESSION['msg']);
        }
    ?>
    </div>

</form>
 </div>   
</body>
</html>