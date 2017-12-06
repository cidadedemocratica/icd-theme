
	<div class="section section-inic-link" style="background-color: #ffffff;">
		<div class="container">
			<a href="http://meps.yolasite.com/">
				<img src="http://icd.dev/wp-content/uploads/2015/11/sub1.jpg" alt="">
			</a>		
		</div>
	</div>

	<div class="section section-iniciativas section-iniciativas-meps">
		<div class="container">
			<div class="iniciativa-links">
				<p>Programa Fortalecimento do Ecossistema da Participação Social:</p>
				<a href="http://meps.yolasite.com/" class="link-meps">MEPS</a>
			</div>
		</div>
	</div>

<?php if( have_rows('iniciativas') ): ?>
	<?php while( have_rows('iniciativas') ): the_row(); ?>
		<?php if( get_row_layout() == 'texto' ): ?>

<div class="section section-inic-texto">
	<div class="container">
		<?php if (get_sub_field('titulo')): ?>
			<h3><?php the_sub_field('titulo'); ?></h3>
		<?php endif ?>
		<div class="bloco-texto"><?php the_sub_field('texto'); ?></div>
	</div>
</div>
		
		<?php elseif( get_row_layout() == 'divisor_link' ):  ?>

<div class="section section-inic-link" style="background-color: <?php the_sub_field('cor_de_fundo'); ?>;">
	<div class="container">
		<a href="<?php the_sub_field('link'); ?>">
			<?php $image = get_sub_field('imagem'); ?>
			<img src="<?php echo $image[sizes][large]; ?>" alt="">
		</a>		
	</div>
</div>

		<?php elseif( get_row_layout() == 'divisor_link_cheia' ):  ?>

<div class="section section-inic-link link-cheia">
	<a href="<?php the_sub_field('link'); ?>">
		<?php $image = get_sub_field('imagem'); ?>
		<img src="<?php echo $image[sizes][large]; ?>" alt="">
	</a>		
</div>
		
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="section section-concursos">
	<div class="container">
		<h1 class="sep-titulo">O MELHOR DA IDEIA<br>É QUANDO ELA VIRA IDEAL</h1>
		<strong class="conc-titulo">Portfolio: </strong>
		
		<div class="lista-portfolio">
		<?php if( have_rows('portfolio') ): ?>
			<?php while( have_rows('portfolio') ): the_row(); ?>
				<?php $image = get_sub_field('capa'); ?>
				<a class="item-lista-portfolio" target="_blank" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('titulo'); ?>" style="background-image: url(<?php echo $image[sizes][large]; ?>)"></a>      
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
	
</div>