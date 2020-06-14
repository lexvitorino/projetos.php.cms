<html>
    <head>
        <meta charset="utf-8">
        <title>Painel Administrativo</title>
        <link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/painel.css" />
        <script type="text/javascript" src="/assets/js/script.js"></script>
    </head>
    <body>
    	<div class="topo"></div>
    	<div class="menu">
            <ul class="ul-esquerda">
                <a href="<?php echo BASE;?>"><li>Home</li></a>
                <a href="<?php echo BASE;?>pagina"><li>Página</li></a>  
                <a href="<?php echo BASE;?>menu"><li>Menu</li></a>
                <a href="<?php echo BASE;?>config"><li>Configurações</li></a>
            </ul>
            <ul class="ul-direita">
                <a href="login/logout"><li>Sair</li></a>
            </ul>
        </div>
    	<div class="container">
	    	<?php $this->loadViewInTamplate($viewName, $viewData); ?>
    	</div>
    	<div class="rodape"></div>
    </body>
</html>