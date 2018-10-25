<html>
<body>

Voici nos articles <hr>

<?php foreach ($tous as $unarticle) { ?>

<div class="item">

	<?php echo $unarticle->art_descript ?>
	au prix de <?php echo $unarticle->art_prix ?> euro <hr>

</div>

<?php } ?>
</body>
</html>