<h1>Configurações</h1>

<hr/>

<form method="POST" name="frmConfig">

	Titulo da Página:<br/>
	<input type="text" name="site_title" value="<?php echo $this->config['site_title'] ?>"><br/><br/>

	Texto de boas vindas:<br/>
	<input type="text" name="home_welcome" value="<?php echo $this->config['home_welcome'] ?>"><br/><br/>

	Banner da home:<br/>
	<input type="text" name="home_banner" value="<?php echo $this->config['home_banner'] ?>"><br/><br/>

	Template:<br/>
	<select name="site_template">
		<option value="default" <?php echo ($this->config['site_template']=='default') ? 'selected="selected"' : ''; ?>>Padrão</option>
		<option value="exemplo" <?php echo ($this->config['site_template']=='exemplo') ? 'selected="selected"' : ''; ?>>Versão de Natal</option>
	</select><br/><br/>

	<input type="submit" value="Salvar">	

</form>
