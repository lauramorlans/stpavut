<div class="main-wrapper">
			<section class="featured-area">
				<div class="container">
					<br><br><br>
					<center>
						<p><?php echo $pagination ?></p>
					<center>
					<div class="row">
						<?php foreach ($tous as $unemanif) { ?>
							<div class="col-md-4 col-sm-12 single-feature pt-80 pb-80 d-flex flex-row">
								<img class="img-fluid" src="<?php echo base_url() ?>asset/photos/<?php echo $unemanif->manif_photo ?>" alt="">
								<div class="desc">
									<h2><?php echo mb_strtoupper($unemanif->manif_intitule) ?></h2>
									<h3><?php echo $unemanif->manif_type ?></h3>
									<p><?php echo $unemanif->manif_description ?></p>
									<h5><?php echo $unemanif->salle_nom ?></h5>
									<h5><?php echo ($unemanif->manif_prix_place*1.23) . '$' ?></h5>
									<a href="<?php echo base_url()?>Manifestations/legraph/<?php echo "$unemanif->manif_id" ?>" class="graphique zgallery1 zoombox" onclick="$.zoombox.options.theme = 'lightbox';" alt="graphique" title="Graphique">Voir le graphique</a>
								</div>
							</div>
						<?php } ?>
					</div>
					<br/>
					<h6><a href="<?php echo base_url() ?>Manifestations/pdf">Découvrez notre pdf des manifestations</a></h6>
					<br/>
					<h6><a href="<?php echo base_url() ?>Manifestations/email">Envoyer un mail</a></h6>
					<br/>
				</div>
			</section>
</div>