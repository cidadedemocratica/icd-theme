<?php /* Template Name: Parceiros */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>
	

	<div class="section section-parceiros-titulo">
		<div class="container">
			<h3><?php the_title(); ?></h3>
			<p>Para as atividades do Instituto, contamos com o apoio de entidades e parceiros, que oferecem os recursos financeiros ou econômicos que possibilitam o alcance da nossa missão.</p>
			<p>Nosso modelo de negócio inclui a prestação de serviços de consultoria para mapeamento e análise de redes e Concursos de Ideias e também financiamento por meio de doações e patrocínio de indivíduos, empresas, fundações e governos.</p>
		</div>
	</div>

	<div class="section section-parceiros">
		<div class="container">			
			<div class="lista-parceiros">
				<h3>Apoio financeiro institucional</h3>
				<div class="parceiros-items">
					<?php if( have_rows('apoio_financeiro_institucional') ): ?>
						<?php while( have_rows('apoio_financeiro_institucional') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('nome'); ?>" class="parceiro-item">
							<?php $image = get_sub_field('logo'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<h3>Apoio Financeiro a Projetos</h3>
				<div class="parceiros-items">
					<?php if( have_rows('apoio_financeiro_projetos') ): ?>
						<?php while( have_rows('apoio_financeiro_projetos') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('nome'); ?>" class="parceiro-item">
							<?php $image = get_sub_field('logo'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<h3>Assessoria e Consultoria</h3>
				<div class="parceiros-items">
					<?php if( have_rows('assessoria') ): ?>
						<?php while( have_rows('assessoria') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('nome'); ?>" class="parceiro-item">
							<?php $image = get_sub_field('logo'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<h3>Parcerias para Correalização de Projetos</h3>
				<div class="parceiros-items">
					<?php if( have_rows('parcerias') ): ?>
						<?php while( have_rows('parcerias') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('nome'); ?>" class="parceiro-item">
							<?php $image = get_sub_field('logo'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<h3>Redes</h3>
				<div class="parceiros-items">
					<?php if( have_rows('redes') ): ?>
						<?php while( have_rows('redes') ): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('nome'); ?>" class="parceiro-item">
							<?php $image = get_sub_field('logo'); ?>
							<img src="<?php echo $image[sizes][large]; ?>" alt="">
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>


			</div>			
		</div>
	</div>


<?php } } ?>
<?php get_footer(); ?>