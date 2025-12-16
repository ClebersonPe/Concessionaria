<?php include("css/header.php");?>

<body>
    <?php include('topo.php');?>
    <div class="pesquisa">
        <label for="">Pesquisar Usuário</label>
        <input type="text" name="" id="" onkeyup="pesquisar(this.value, 'tb_usuario')">
    </div>
    
    <div id="retorno"></div>

    
    <script src="app.js"></script>
</body>
</html>