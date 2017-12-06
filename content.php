<div class="col s12 m6 destaque-cards">
	<div class="homeblog-container z-depth-1">
		<?php
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id,'large', true);
		?>
		<div class="homeblog-topo">
			<img class="destaque-imagem" src="<?php echo $image_url[0]; ?>">
			<div class="destaque-data">
				<span class="data-dia"><?php the_time('d'); ?></span>
				<span class="data-mes"><?php the_time('M'); ?></span>
			</div>
			<h2 class="destaque-titulo"><?php the_title(); ?></h2>
		</div>
		<div class="destaque-trecho">
			<?php the_excerpt(); ?>
		</div>
		<div class="homeblog-social">
			<a href="#" class="share-facebook share-icon"><i class="fa fa-facebook-official"></i></a>
			<a href="#" class="share-facebook share-icon"><i class="fa fa-twitter"></i></a>
			<a href="#" class="share-facebook share-icon"><i class="fa fa-google-plus"></i></a>
			<a href="<?php the_permalink(); ?>" class="destaque-leiamais">Leia mais</a>	
		</div>	
	</div>
</div>