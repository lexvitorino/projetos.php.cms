<div class="home_banner" style="background-image:url('<?php echo BASE.'assets/images/banner/'.$this->config['home_banner']; ?>')">

</div>

<div class="home_banner_txt">
	<?php echo $this->config['home_welcome']; ?>
</div>

<div class="home_depo">
	<h3>Depoimentos de clientes</h3>
	<?php foreach ($depoimento as $d): ?>
        <strong><?php echo $d['nome']; ?></strong><br/>
        <?php echo $d['texto']; ?>
        <hr/>
    <?php endforeach; ?>	
</div>

<div class="home_cta">
	Deseja conferir nossos serviços?</br>
	<a href="<?php echo BASE.'servicos'; ?>"><div>Conferir nossos serviços</div></a>
</div>