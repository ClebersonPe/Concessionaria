<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Minha Concessionária</title>
</head>
<body>

    <?php include('topo.php');
    require('connect.php');
    $cod = $_GET['cod'];
    $carro = mysqli_query($con, "Select * From `tb_carro` where `cod_carro` = '$cod'");
    $carros = mysqli_fetch_assoc($carro); 
    ?>

<div class="formulario">
 <form action="alterarCarro.act.php" method="post" enctype="multipart/form-data" class="form">  
    <fieldset>
    <input type="hidden" name="codigo" value="<?php echo $carros['cod_carro']; ?>"> <!--input hidden para o retorno do id codigo-->
    <input type="hidden" name="fotos" value="<?php echo $carros['foto']; ?>">
    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" id="" value="<?php echo $carros['modelo']; ?>">

    <label for="marca">Marca:</label>
    <select name="marca" id="">
        <option value="Volkswagen" <?php if($carros['marca_carro'] == 'Vokswagen'){echo "selected";} ?>>Volkswagen</option>
        <option value="Chevrolet"  <?php if($carros['marca_carro'] == 'Chevrolet'){echo "selected";} ?>>Chevrolet</option> <!--php para manter dos dados anteriores-->
        <option value="Renault"    <?php if($carros['marca_carro'] == 'Renault'){echo "selected";} ?>>Renault</option>
        <option value="Honda"      <?php if($carros['marca_carro'] == 'Honda'){echo "selected";} ?>>Honda</option>
        <option value="Fiat"       <?php if($carros['marca_carro'] == 'Fiat'){echo "selected";} ?>>Fiat</option>
        <option value="Bmw"        <?php if($carros['marca_carro'] == 'Bmw'){echo "selected";} ?>>Bmw</option>
        <option value="Volvo"      <?php if($carros['marca_carro'] == 'Volvo'){echo "selected";} ?>>Volvo</option>
        <option value="Nissan"     <?php if($carros['marca_carro'] == 'Nissan'){echo "selected";} ?>>Nissan</option>
    </select>

    <label for="anoFabricacao">Ano de Fabricação:</label>
    <input type="text" name="anoFabricacao" id="" value="<?php echo $carros['ano_fabricacao']; ?>">

    <label for="valorCarro">Valor do Carro:</label>
    <input type="number" name="valorCarro" id="" value="<?php echo $carros['valor_carro'];?>">

    <label for="descricao">Descrição do Carro:</label>
    <textarea name="descricao" id="" cols= "30" rows = "9"><?php echo $carros['desc_carro']; ?></textarea>

    <label for="km">Quilometragem:</label>
    <input type="number" name="km" id="" value="<?php echo $carros['quilometragrem']; ?>">

    <div class="alterFoto">
        <img src="<?php echo $carros['foto']; ?>" alt="">
        <p>
        <label for="fileFoto">Foto:</label>
        <input type="file" name="foto" id="fileFoto">
        </p>
    </div>

    </fieldset>
    <div class="sub">
    <input type="submit" value="Enviar">
    <?php
        @session_start();
        if(isset($_SESSION['msg2'])){
            echo "<p>{$_SESSION['msg2']}</p>";
            unset($_SESSION['msg2']);
        }
    ?>
    </div>

</form>
 </div>   
</body>
</html>