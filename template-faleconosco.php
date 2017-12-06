<?php /* Template Name: Fale Conosco */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>
	

	<div class="section section-quemsomos" id="quemsomos">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 offset-m1 topo-conteudo padmobile">
					<h2>Quem Somos</h2>
					<div>
						<?php //the_field('topo_texto'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php } } ?>
<?php get_footer(); ?>