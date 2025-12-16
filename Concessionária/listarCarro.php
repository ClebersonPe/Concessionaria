<?php 
include("topo.php");
include("css/header.php");
?>
<body>
<div class="container">
    <div class="cards">
    
<?php

require("connect.php");
$carro = mysqli_query($con, "Select * from `tb_carro`");

while($carros = mysqli_fetch_assoc($carro)){
    echo "<div class=carros>";
    echo "<div class=img><img src=$carros[foto]>";
    echo "</div>";
    echo "<h1>$carros[modelo]</h1>";
    echo "<h2>R$ $carros[valor_carro]</h2>";
    echo "<div class=modelo>";
    if ("$carros[marca_carro]" == "Chevrolet"){ //chevrolet icon
        echo "<img src=./img_site/gmIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Volkswagen"){ //vw icon
        echo "<img src=./img_site/vwIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Renault"){ //renault icon
        echo "<img src=./img_site/renaultIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Honda"){ //Honda icon
        echo "<img src=./img_site/hondaIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Fiat"){ //fiat icon
        echo "<img src=./img_site/fiatIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Bmw"){ //bmw icon
        echo "<img src=./img_site/bmwIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Volvo"){ //volvo icon
        echo "<img src=./img_site/volvoIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    else if("$carros[marca_carro]" == "Nissan"){ //nissan icon
        echo "<img src=./img_site/nissanIcon.png><p>$carros[marca_carro]</p>";
        echo "<p>$carros[ano_fabricacao]</p>";
    }else{
        echo "<p>$carros[marca_carro]</p>"; //
        echo "<p>$carros[ano_fabricacao]</p>";
    }
    // echo "<p>$carros[marca_carro]</p>";
    // echo "<p>$carros[ano_fabricacao]</p>";
    echo "</div>";
    echo "<div class=desc><p>$carros[desc_carro]</p>";
    echo "<p>$carros[quilometragrem] Km</p></div>";
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
        echo "<div class=botao><a href=alterarCarro.php?cod=$carros[cod_carro]><button>Alterar</button></a>";
        echo "<a href=javascript:excluir($carros[cod_carro],\"carro\")><button>Excluir</button></a>";
        echo "</div>";
       
    }
    echo "</div>";
   
   
};



?>


    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="app.js"></script>
</body>


