<?php /* Template Name: Doacao */ get_header(); ?>
<?php if ( have_posts() ) {	while ( have_posts() ) { the_post(); ?>

<html>
  <head>
    <title>Cidade Democrática | Doação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--    <script src="https://assets.pagar.me/checkout/checkout.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/donation.js"></script> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
  </head>
  <body id="donation-page">
    <div class="preload" style="display: none;">
      <img src="<?php echo get_template_directory_uri(); ?>/img/bg1.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/bg2.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/bg3.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/bg4.png" alt="" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/bg5.png" alt="" />
    </div>
    <div id="left-col" class="col">
      <h1></h1>
      <p class="support-buttons">
        <a href="#" class="button-support clicked" id="button-multiple-support">Vou apoiar todo mês</a>
        <a href="#" class="button-support" id="button-single-support">Vou ajudar c/ doação única</a>
      </p>
      <ul id="values" class="value-2">
        <li id="value-1" data-value="20.00"> R$ 20</li>
        <li id="value-2" data-value="40.00"> R$ 40</li>
        <li id="value-3" data-value="100.00">R$ 100</li>
        <li id="value-4" data-value="200.00">R$ 200</li>
        <li id="value-5" data-value="500.00">R$ 500</li>
	<form id="pagSeguroForm" action="#" method="post">
        	<button id="pay">Doar agora!</button>
        </form>
      </ul>
    </div>
    <div id="right-col" class="col">
      <h2>Selecione o valor e clique em “Doar Agora”</h2>

	</br>
      <p>Nesses oito anos de trabalho, o Cidade Democrática aprendeu que a sua força vem de <b>pessoas inteligentes</b>, que acreditam nos <b>valores da democracia</b> e atuam no dia a dia para torná-la realidade.</p>
	</br>
      </br>
      </br>
	</br>
      <p><img src="<?php echo get_template_directory_uri(); ?>/img/heads.png" alt="" id="heads" /></p>
      </br>
	</br>
	</br>
      <p>As doações ajudarão a <b>dar fôlego para nosso time</b> continuar desenvolvendo tecnologias livres para cidades brasileiras</p>
	</br>
      <footer>Para interromper a doação mensal é só escrever para: <b>contato@cidadedemocratica.org.br</b>.  
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="UZZY55EGXHRSA">
<a href="#" class="submit-paypal">Não consegue doar pelo pague seguro? Também dá para <b>doar via Paypal</b></a>
</form>
<script type="text/javascript">
$(document).ready(function() {
    $( '.submit-paypal').on('click', function(e) {
        e.preventDefault();
        $(this).parent().submit();
    });
});
</script>

</footer>

    </div>
    <address></address>
  </body>
</html>

<?php } } ?>
<?php get_footer(); ?>
