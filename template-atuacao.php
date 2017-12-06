<?php /* Template Name: Atuação */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>
	

	<div class="section section-atuacao">
		<div class="container">
			<h1>Cidades Democráticas</h1>
			<div class="atuacao-texto">
				<div class="bloco-texto"><?php the_field('texto_inicial'); ?></div>
				<small>O Concurso tem cinco etapas</small>
			</div>
			<div class="atuacao-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-concurso.png" alt="">
			</div>
			<div class="atuacao-icones">
				<?php if( have_rows('etapas') ): ?>
					<?php while( have_rows('etapas') ): the_row(); ?>
						<div class="atuacao-icone">
							<?php $image = get_sub_field('icone'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
							<p><span><?php the_sub_field('nome'); ?></span> <?php the_sub_field('texto'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<div class="break"></div>
			</div>
			<div class="atuacao-frase">
				<?php the_field('texto_final'); ?>
			</div>
		</div>
	</div>

	<div class="section section-concursos">
		<div class="container">
			<!-- <h1 class="sep-titulo">EU APOIO, TU APOIAS, ELE APOIA<br>E NÓS CONSEGUIMOS.</h1> -->
			<strong class="conc-titulo">Concursos realizados: </strong>
			
			<div class="lista-concursos">
			<?php $cont = 0; ?>
			<?php $query = new WP_Query( array(
				'post_type' => 'concursos', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1
			) ); 
			while ( $query->have_posts() ) : $query->the_post() ?>
			<?php $image = get_field('imagem'); ?>
			<a class="item-lista-concurso js-item-lista-concurso" data-concurso="<?php echo $cont; ?>" href="#" style="background-image: url(<?php echo $image[sizes][large]; ?>)"></a>
			<?php $cont++; ?>
			<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
		<?php $cont = 0; ?>
		<?php $query = new WP_Query( array(
			'post_type' => 'concursos', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => -1
		) ); 
		while ( $query->have_posts() ) : $query->the_post() ?>
		<div class="bloco-concurso" id="concurso-<?php echo $cont; ?>">
			<?php $cont++; ?>
			<div class="container">
				<a href="#" class="close-concurso">
					<i class="fa fa-times"></i>
				</a>
				<div class="bloco-concurso-esq">
					<?php $image = get_field('imagem'); ?>
					<img src="<?php echo $image[sizes][large]; ?>" alt="">
					<div class="concurso-links">
						<?php if( have_rows('links_e_arquivos') ): ?>
							<?php while( have_rows('links_e_arquivos') ): the_row(); ?>
								<?php if( get_row_layout() == 'link' ): ?>
								<a href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('nome'); ?></a>
								<?php elseif( get_row_layout() == 'arquivo' ):  ?>
									<?php $arquivo = get_sub_field('arquivo') ?>
								<a href="<?php echo $arquivo['url']; ?>" target="_blank"><?php the_sub_field('nome'); ?></a>
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="bloco-concurso-dir">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>


	<div class="section section-iniciativas">
		<div class="container">
			<h1>Fortalecimento do Ecossistema<br>da Participação Social</h1>
			<div>
				<?php the_field('texto_iniciativas'); ?>
			</div>
		</div>
	</div>

	<div class="section section-lista-iniciativas">
		<div class="container">			
			<div class="lista-concursos">

			<?php $cont = 0; ?>
			<?php if( have_rows('bloco_iniciativas') ): ?>
				<?php while( have_rows('bloco_iniciativas') ): the_row(); ?>
				<?php $image = get_sub_field('capa'); ?>
				<a class="item-lista-concurso js-lista-iniciativas" data-concurso="<?php echo $cont; ?>" href="#" style="background-image: url(<?php echo $image[sizes][large]; ?>)"></a>
				<?php $cont++; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>

	</div>

	<div class="multi-section">
	<?php $cont = 0; ?>
	<?php if( have_rows('bloco_iniciativas') ): ?>
		<?php while( have_rows('bloco_iniciativas') ): the_row(); ?>
		<div class="single-iniciativa <?php if ($cont == 0) { echo 'ativo'; } ?>" id="iniciativa-<?php echo $cont; ?>">
			<div class="section section-inic-link" style="background-color: <?php the_sub_field('cor_de_fundo'); ?>;">
				<div class="container">
					<a href="<?php the_sub_field('link'); ?>" target="_blank">
						<?php $image = get_sub_field('imagem_topo'); ?>
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
					</a>		
				</div>
			</div>

			<div class="section section-inic-texto">
				<div class="container">
					<?php if (get_sub_field('titulo')): ?>
						<h3><?php the_sub_field('titulo'); ?></h3>
					<?php endif ?>
					<div class="bloco-texto"><?php the_sub_field('texto'); ?></div>
				</div>
			</div>
		</div>
		<?php $cont++; ?>
		<?php endwhile; ?>
	<?php endif; ?>

	</div>



<?php } } ?>
<?php get_footer(); ?>