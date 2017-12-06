<?php /* Template Name: Curso */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>

<div class="form-iframe-google">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScomHOTsH-mO-thV3nQ69MU0um00a7XO6qJestILO5Jyj2M4g/viewform?embedded=true" width="760" height="1800" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
</div>

<?php } } ?>
<?php get_footer(); ?>
