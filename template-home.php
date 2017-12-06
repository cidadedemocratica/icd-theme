<?php /* Template Name: Home */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>
	
	<div class="section section-fotos">
	    <ul class="container-fotos">
	        <?php $images = get_field('fotos'); if( $images ): ?>
	          <?php foreach( $images as $image ): ?>
	          	<li>
	          		<img src="<?php echo $image['url']; ?>">
	          	</li>	            
	          <?php endforeach; ?>
	        <?php endif; ?>
	    </ul>
	</div>

	<div class="section section-thinkdo">
		<div class="container">
			<h1 class="home-titulo"><strong>THINK</strong> AND <strong>DO</strong> TANK BRASILEIRO<br>DE PARTICIPAÇÃO SOCIAL</h1>
			<div class="think">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ilustra-think.png" alt="">
				<h3>Pesquisar</h3>
				<p><?php the_field('texto_think'); ?></p>
			</div>
			<div class="do">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ilustra-do.png" alt="">
				<h3>Inovação aberta</h3>
				<p><?php the_field('texto_do'); ?></p>
			</div>
		</div>
	</div>

	<div class="section section-nosmove">
		<div class="container">
			<div class="nosmove">
				<h2>O que<br>nos move</h2>
				<p><?php the_field('o_que_nos_move'); ?></p>
				<h3>Fazemos isso mediante o fortalecimento da sociedade civil.</h3>
			</div>
		</div>
	</div>


<?php } } ?>
<?php get_footer(); ?>
