<ul>
    <?php foreach ($menu as $m): ?>
        <a href="<?php echo BASE.$m['url']; ?>">
        	<li><?php echo ($m['nome']); ?></li>
        </a>
    <?php endforeach; ?>
</ul>