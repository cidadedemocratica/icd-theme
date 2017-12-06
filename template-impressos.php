<?php /* Template Name: Impressos */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>
	

<div class="section section-concursos section-impressos">
	<div class="container">
		<h1 class="sep-titulo">O MELHOR DA IDEIA<br>É QUANDO ELA VIRA IDEAL</h1>
		<span class="conc-titulo"><strong>Publicações</strong>, clique para visualizar e baixar o arquivo:</span>
		
		<div class="lista-impressos">
		<?php if( have_rows('impressos') ): ?>
			<?php while( have_rows('impressos') ): the_row(); ?>
				<?php 
					$image = get_sub_field('imagem'); 
					$arquivo = get_sub_field('arquivo');
				?>
				<a class="item-impressos" target="_blank" href="<?php echo $arquivo['url']; ?>" title="<?php the_sub_field('titulo'); ?>" style="background-image: url(<?php echo $image[sizes][large]; ?>)"></a>      
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>		
</div>


<?php } } ?>
<?php get_footer(); ?>