<h1>Cadastro de Páginas</h1>

<hr/>

<a href="<?php echo BASE; ?>pagina/adicionar">Adicionar pagina</a><br/><br/>

<table border="0" width="100%">
	<tr>
		<th style="text-align: left">ID</th>
		<th style="text-align: left">Titulo</th>
		<th style="text-align: left">URL</th>
		<th style="text-align: left">Ações</th>
	</tr>
	<?php foreach($paginas as $p): ?>
	<tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['titulo']; ?></td>
		<td><?php echo $p['url']; ?></td>
		<td>
			<a href="<?php echo BASE; ?>pagina/editar/<?php echo $p['id']; ?>">Editar</a>
			<a href="<?php echo BASE; ?>pagina/excluir/<?php echo $p['id']; ?>">Excluir</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>