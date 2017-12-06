<?php get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>

<div class="section section-quemsomos" id="quemsomos">
	<div class="container">
		<div class="row">
			<div class="col s12 topo-conteudo padmobile topo-blog">
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail( 'full' ); ?> 
			</div>
			<div class="col s12 m8 offset-m2 topo-conteudo padmobile texto-blog">
				<div>
					<?php the_content(); ?>
					<div class="links-sociais">
						<h2>Compartilhe este artigo</h2>
						<a href="#" class="share-facebook share-icon" onclick="FB.ui({ method: 'share', href: '<?php the_permalink(); ?>',}, function(response){});"><i class="fa fa-facebook-official"></i></a>
						<a target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php wp_get_shortlink(); ?> &hashtags=3weeks" class="share-facebook share-icon"><i class="fa fa-twitter"></i></a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php wp_get_shortlink(); ?>" class="share-facebook share-icon"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>


<?php } } ?>
<?php get_footer(); ?>