<h1>Editar Página</h1>

<hr/>

<form method="POST">
	Titulo do Página:<br/>
	<input type="text" name="titulo" value="<?php echo $pagina['titulo'] ?>"><br/><br/>

	URL do Página:<br/>
	<input type="text" name="url" value="<?php echo $pagina['url'] ?>"><br/><br/>

	Corpo da Página:<br/>
	<textarea name="corpo" id="corpo"><?php echo $pagina['corpo'] ?></textarea><br/><br/>

	<input type="submit" value="Salvar">		
</form>

<script type="text/javascript" src="<?php echo BASE; ?>assets/pluggins/ckeditor/ckeditor.js"></script>

<script type="text/javascript">
	window.onload = function() {
		CKEDITOR.replace("corpo");
	}
</script>