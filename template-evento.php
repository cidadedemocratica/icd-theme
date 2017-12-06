<?php /* Template Name: Evento */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>

<div class="form-iframe-google">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd18APGNOzZ71rB5zURYiUpru6qOcZIqRqdljukGnoabKBiSg/viewform?embedded=true" width="760" height="1800" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
</div>

<?php } } ?>
<?php get_footer(); ?>
