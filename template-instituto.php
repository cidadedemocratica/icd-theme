<?php /* Template Name: Instituto */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>


<div class="section section-instituto-1">
	<div class="container">
		<div class="texto">
			<h2>O Instituto</h2>
			<?php the_field('texto_abre'); ?>
		</div>
	</div>
</div>

<div class="section section-instituto-2">
	<div class="container">
		<div class="texto bloco-esq">
			<h2>Que tipo de think and do tank somos</h2>
			<?php the_field('texto_tipo'); ?>
		</div>

		<div class="texto bloco-dir">
			<h2>O que é participação social para nós</h2>
			<?php the_field('texto_participa'); ?>
			<?php the_field('texto_resultado'); ?>
		</div>
	</div>
</div>

<div class="section section-instituto-3">
	<div class="container">
		<div class="texto bloco-esq">
			<?php the_field('objetivos'); ?>			
		</div>

		<div class="texto bloco-dir">
			<h2>Teoria de Mudança</h2>
			<p>Nossa teoria de mudança relaciona empresas, governos e sociedade e as trocas entre cada um deles.</p>	
			<img src="<?php echo get_template_directory_uri(); ?>/img/sobre-organograma-2.jpg" alt="">
		</div>
	</div>
</div>

<div class="section section-instituto-principios">
	<div class="container">
		<div class="texto">
			<h2>Princípios</h2>
			<p><?php the_field('principios_texto'); ?></p>
		</div>
		<div class="principios-itens">
			<?php if( have_rows('principios_itens') ): ?>
				<?php while( have_rows('principios_itens') ): the_row(); ?>
					<div class="principios-item">
						<?php $image = get_sub_field('icone'); ?>
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<h2><?php the_sub_field('nome'); ?></h2>
						<p><?php the_sub_field('texto'); ?></p>
					</div>	        
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="ghost"></div>
			<div class="break"></div>
		</div>
	</div>
</div>

<div class="section section-instituto-equipe">
	<div class="container">
		<div class="texto">
			<h2>Equipe</h2>
			<div class="membros-equipe">
				<?php if( have_rows('equipe') ): ?>
					<?php while( have_rows('equipe') ): the_row(); ?>
					<?php $image = get_sub_field('foto'); ?>
					<div class="membro-equipe">
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<div class="bio">
							<h3><?php the_sub_field('nome'); ?></h3>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="break"></div>
			</div>
		</div>
	</div>
</div>

<div class="section section-instituto-equipe">
	<div class="container">
		<div class="texto">
			<h2>Conselho Fiscal</h2>
			<p>O Conselho Fiscal é o órgão de fiscalização do Instituto formado por, no mínimo dois e, no máximo, três conselheiros eleitos pela Assembleia Geral, com mandato de dois anos, podendo ser reeleitos e sem receber qualquer remuneração. Compete ao Conselho Fiscal examinar e emitir pareceres sobre prestação de contas e balanço anual do Instituto, para apresentar à Assembleia Geral Ordinária, de acordo com as exigências da Lei 9.790/99.</p>
			<div class="membros-equipe">
				<?php if( have_rows('conselho_fiscal') ): ?>
					<?php while( have_rows('conselho_fiscal') ): the_row(); ?>
					<?php $image = get_sub_field('foto'); ?>
					<div class="membro-equipe">
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<div class="bio">
							<h3><?php the_sub_field('nome'); ?></h3>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="break"></div>
			</div>
		</div>
	</div>
</div>

<div class="section section-instituto-equipe">
	<div class="container">
		<div class="texto">
			<h2>Conselheiros</h2>
			<p>São pessoas que admiramos e que nos oferecem contribuições por meio de dados, análises, estudos, opiniões e pareceres</p>
			<div class="membros-equipe">
				<?php if( have_rows('conselho_consultivo') ): ?>
					<?php while( have_rows('conselho_consultivo') ): the_row(); ?>
					<?php $image = get_sub_field('foto'); ?>
					<div class="membro-equipe">
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<div class="bio">
							<h3><?php the_sub_field('nome'); ?></h3>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="break"></div>
			</div>
		</div>
	</div>
</div>


<!-- Blocos que estavam hardcoded no template e que foram removidos do custom fields

<div class="section section-instituto-equipe">
	<div class="container">
		<div class="texto">
			<h2>Conselho Participativo​</h2>
			<p>O Conselho Participativo é uma instância informal criada para envolver pessoas com atuação relevante em seus campos de trabalho que, de uma forma ou se outra, contribuem para a Missão do Instituto.</p>
			<div class="membros-equipe">
				<?php if( have_rows('conselho_participativo') ): ?>
					<?php while( have_rows('conselho_participativo') ): the_row(); ?>
					<?php $image = get_sub_field('foto'); ?>
					<div class="membro-equipe">
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<div class="bio">
							<h3><?php the_sub_field('nome'); ?></h3>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="break"></div>
			</div>
		</div>
	</div>
</div>

<div class="section section-instituto-equipe">
	<div class="container">
		<div class="texto">
			<h2>Assembleia Geral</h2>
			<p>A Assembleia Geral é o órgão soberano de deliberação do Instituto, formada por todos os associados (cada associado tem direito a um voto), com poderes para deliberar sobre todas as atividades relativas ao objeto social e tomar as providências que julgar convenientes ao desenvolvimento e funcionamento do Instituto.​​​ As reuniões ordinárias acontecem uma vez por ano com o objetivo de aprovar o planejamento anual e o orçamento para seu desenvolvimento, incluindo: eleger ou destituir os membros da Diretoria Executiva e dos Conselhos Consultivo e Fiscal, aprovar o relatório anual, as contas e o balanço anual apresentados pela Diretoria Executiva, deliberar sobre entrada e saída de associado, aprovar o plano anual de atividades e orçamento do Instituto, alterar o Estatuto Social e outros assuntos de interesse social.</p>
			<div class="membros-equipe">
				<?php if( have_rows('assembleia') ): ?>
					<?php while( have_rows('assembleia') ): the_row(); ?>
					<?php $image = get_sub_field('foto'); ?>
					<div class="membro-equipe">
						<img src="<?php echo $image[sizes][large]; ?>" alt="">
						<div class="bio">
							<h3><?php the_sub_field('nome'); ?></h3>
							<p><?php the_sub_field('texto'); ?></p>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
					<div class="break"></div>
			</div>
		</div>
	</div>
</div>

<div class="section section-instituto-organograma">
	<div class="container">
		<div class="texto">
			<h2>Organograma</h2>
			<?php $image = get_field('organograma'); ?>
			<img src="<?php echo $image[sizes][large]; ?>" alt="">
		</div>
	</div>
</div>

fim dos blocos que estavam hardcoded e foram removidos do custom fiels -->


<div class="section section-instituto-relatorios">
	<div class="container">
		<div class="texto">
			<h3>Relatórios Anuais</h3>
			<div class="lista-relatorios">
				<?php if( have_rows('relatorios') ): ?>
					<?php while( have_rows('relatorios') ): the_row(); ?>
						<?php $arquivo = get_sub_field('arquivo'); ?>
						<a href="<?php echo $arquivo['url'] ?>" target="_blank"><?php the_sub_field('nome'); ?></a>        
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php } } ?>
<?php get_footer(); ?>