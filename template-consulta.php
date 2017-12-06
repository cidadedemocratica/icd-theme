<?php /* Template Name: Consulta */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>

<div class='polis' data-conversation_id='2bsas8mwnb'></div>
<script async='true' src='https://pol.is/embed.js'></script>

<?php } } ?>
<?php get_footer(); ?>
