<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->config['site_title']; ?></title>
        <link rel="stylesheet" href="<?php echo BASE; ?>/assets/css/default.css" />
        <script type="text/javascript" src="/assets/js/script.js"></script>
    </head>
    <body>
    	<div class="topo"></div>
    	<div class="menu">
            <?php $this->loadMenu(); ?>
        </div>
    	<div class="container">
	    	<?php $this->loadViewInTamplate($viewName, $viewData); ?>
    	</div>
    	<div class="rodape"></div>
    </body>
</html>